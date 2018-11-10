<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:49
 */
namespace backend\controllers;
class CardsController extends BaseController
{
	public function actionMake(){
		return $this->render('make');
	}
	public function actionManage(){
		return $this->render('manage');
	}
	public function actionType(){
		return $this->render('type');
	}
}