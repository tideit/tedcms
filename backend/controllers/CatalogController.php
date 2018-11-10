<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:54
 */
namespace backend\controllers;
class CatalogController extends BaseController{
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionDel(){
		return $this->render('del');
	}
	public function actionDo(){
		return $this->render('do');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionMain(){
		return $this->render('main');
	}
	public function actionMenu(){
		return $this->render('menu');
	}
}