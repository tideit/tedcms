<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 13:58
 */
namespace frontend\controllers;
use common\util\PayUtil;

class MainController extends BaseController
{
	public function actionIndex(){
		return $this->render('main');
	}
	public function actionResults(){
		return $this->render('results');
	}
	public function actionCardcounting(){
		$cards = $_REQUEST['card'];
		if(!is_array($cards) || empty($cards)){
			return false;
		}
		$super = isset($_REQUEST['super'])?intval($_REQUEST['super']):0;
		foreach ( $cards as $key=>$value ){
           $str[] = $key;
		}
		$data['cards'] = implode(',',$str);
		$data['super'] = $super;
		$GLOBALS['redis']->set('card_counting',json_encode($data));
		exec("python test.py",$out,$res);
		//var_dump($out);
		return $this->redirect('waitcounting');
	}
	public function actionWaitcounting(){
		return $this->render('wait');
	}
	public function actionChongzhi() {
		return $this->render('chongzhi');
	}
	public function actionDochongzhi(){
		$amount = $_REQUEST['money'];
		if(empty($amount)){
			return false;
		}
		$platform = 1;
		$title = '菠萝扑克充值';
		$tradeNo = '';
		$remark = '';
        //支付宝流程
		PayUtil::zfbOrder($platform, $title, $tradeNo, $remark, $amount);
	}
	public function actionNotify(){
        //收款后记录
	}
}