<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 17:26
 */
namespace backend\controllers;
class ContentController extends BaseController
{
	public function actionAtt(){
		return $this->render('att');
	}
	public function actionBatchUp(){
		return $this->render('batch_up');
	}
	public function actionBatchupAction(){
		return $this->render('batchup_action');
	}
	public function actionIList(){
		return $this->render('i_list');
	}
	public function actionList(){
		return $this->render('list');
	}
	public function actionSList(){
		return $this->render('s_list');
	}
	public function actionSelectList(){
		return $this->render('select_list');
	}
	public function actionSgList(){
		return $this->render('sg_list');
	}
	public function actionTj(){
		return $this->render('tj');
	}
}