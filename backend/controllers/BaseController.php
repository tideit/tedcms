<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/6/8
 * Time: 8:26
 */
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class BaseController extends Controller{
	   public $enableCsrfValidation = false;
	   public function init(){
	       if (!isset($_SESSION)){
	           session_start ();
	           setcookie ('TEDCMS', session_id(),time() + 30*600, '/', 'tedcms.li' );
	           define('SESS_ID', session_id());
		       $_SESSION['login_error_times'] = 0;
	       }
		   date_default_timezone_set('Asia/Shanghai');
		   $GLOBALS['redis'] = Yii::$app->redis;
		   $GLOBALS['sess'] = new \common\helpers\SessionHelper();
		   $GLOBALS['ted'] = new \common\helpers\TedcmsHelper('tedcms', 'ted_');
		   $GLOBALS['db'] = new \common\models\core\ClsMysql();
	   }
}