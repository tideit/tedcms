<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:47
 */
namespace backend\controllers;
class BaidunewsController extends BaseController
{
	public function actionIndex(){
		return $this->render('index');
	}
}