<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:13
 */
namespace backend\controllers;
class ArchivesController extends BaseController {
    public function actionAdd(){
    	return $this->render('add');
    }
    public function actionEdit(){
    	return $this->render('edit');
    }
    public function actionDo(){

    }
    public function actionSgAdd(){
    	return $this->render('sg_add');
    }
    public function actionSgEdit(){
    	return $this->render('sg_edit');
    }
}