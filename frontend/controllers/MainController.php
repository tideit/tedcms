<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 13:58
 */
namespace frontend\controllers;
class MainController extends BaseController
{
	public function actionIndex(){
		return $this->render('main');
	}
	public function actionResults(){
		return $this->render('results');
	}
	public function actionCardcounting(){
		$data = $_REQUEST['card'];
		if(!is_array($data) || empty($data)){
			return false;
		}
		$GLOBALS['redis']->set('card_counting',json_encode($data));
		return $this->redirect('waitcounting');
	}
	public function actionWaitcounting(){
		return $this->render('wait');
	}
}