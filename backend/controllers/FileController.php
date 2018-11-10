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
		return $this->render('');
	}
}