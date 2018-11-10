<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:59
 */
namespace backend\controllers;
class CoController extends BaseController{
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionDo(){
		return $this->render('do');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionEditText(){
		return $this->render('edit_text');
	}
	public function actionExport(){
		return $this->render('export');
	}
	public function actionExportCorule(){
		return $this->render('export_corule');
	}
	public function actionGatherStart(){
		return $this->render('gather_start');
	}
	public function actionGatherStartAction(){
		return $this->render('gather_start_action');
	}
	public function actionGetCorule(){
		return $this->render('get_corule');
	}
	public function actionGetsourceUrlAction(){
		return $this->render('getsource_url_action');
	}
	public function actionMain(){
		return $this->render('main');
	}
	public function actionTestRule(){
		return $this->render('test_rule');
	}
	public function actionUrl(){
		return $this->render('');
	}
	public function actionView(){
		return $this->render('view');
	}
}