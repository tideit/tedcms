<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 17:55
 */
namespace backend\controllers;
class FeedbackController extends BaseController{
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionMain(){
		return $this->render('main');
	}
}