<?php
namespace backend\controllers;

use common\helpers\TimeHelper;
use Yii;
use common\models\core\ClsMain;
/**
 * Site controller
 */
class SiteController extends BaseController
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
    	if($_SESSION['user_id']==0){
		    $this->redirect('site/login');
	    }
	    $sql = 'select * from '.$GLOBALS['ted']->table('users');
	    $data['users'] = $GLOBALS['db']->getAll($sql);
        return $this->render('index',$data);
    }
    public function actionLogin(){
    	return $this->render('login');
    }
    public function actionDologin(){
    	$username = trim($_REQUEST['username']);
    	$password = trim($_REQUEST['password']);
        if(empty($username) || empty($password)){
        	$data = ['status'=>1,'error'=>1,'message'=>'用户名或者密码为空'];
        	die(json_encode($data));
        }
        $sql = "select user_id,email,user_rank,last_login,password,ec_salt from ".$GLOBALS['ted']->table('users')." where user_name = '".$username."'";
        $result = $GLOBALS['db']->getRow($sql);
        if(empty($result)){
           $data = ['status'=>1,'error'=>1,'message'=>'用户名不存在,请查证'];
           die(json_encode($data));
        }
        $temp_password = md5(md5($password).$result['ec_salt']);
        if($temp_password == $result['password']){
	        $data = ['status'=>1,'error'=>0,'message'=>'登录成功'];
	        ClsMain::set_admin_session($result['user_id'], $username, $result['user_rank'], $result['last_login'],$result['email']);
	        ClsMain::update_last_login();
	        $this->redirect('/');
        }else{
	        $data = ['status'=>1,'error'=>1,'message'=>'密码错误'];
	        $_SESSION['login_error_times'] += 1;
	        die(json_encode($data));
        }
    }
    public function actionLoginout(){
    	$GLOBALS['sess']->destroy_session();
    	$this->redirect('login');
    }
}
