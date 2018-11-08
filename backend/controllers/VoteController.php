<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 15:46
 */
namespace backend\controllers;
class VoteController extends BaseController{
      public function actionMain(){
	      $sql = "SELECT aid,votename,starttime,endtime,totalcount,isenable FROM ".$GLOBALS['ted']->table('vote')." ORDER BY aid DESC";
	      return $this->render('main');
      }
}