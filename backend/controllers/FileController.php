<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 18:00
 */
namespace backend\controllers;
class FileController extends BaseController
{
	public function actionClass(){
		return $this->render('class');
	}
	public function actionManageControl(){
		return $this->render('manage_control');
	}
	public function actionManageMain(){
		return $this->render("manage_main");
	}
	public function actionManageView(){
		return $this->render('manage_view');
	}
	public function actionPicView(){
		return $this->render('pic_view');
	}
}