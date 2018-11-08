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
}