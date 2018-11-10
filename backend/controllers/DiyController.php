<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 17:46
 */
namespace backend\controllers;
class DiyController extends BaseController
{
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionFieldAdd(){
		return $this->render('field_add');
	}
	public function actionFieldEdit(){
		return $this->render('field_edit');
	}
	public function actionList(){
		return $this->render('list');
	}
	public function actionMain(){
		return $this->render('main');
	}
}