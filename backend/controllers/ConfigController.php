<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 17:23
 */
namespace backend\controllers;
class ConfigController extends BaseController
{
	public function actionIndex(){
		return $this->render('index');
	}
}