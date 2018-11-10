<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/8
 * Time: 19:01
 */
namespace console\controllers;
use yii\console\Controller;
class CardcountingController extends Controller
{
	public function init()
	{

		$GLOBALS['redis'] = \Yii::$app->redis;
		$GLOBALS['db'] = new \common\models\core\ClsMysql();
		$GLOBALS['ecs'] = new \common\helpers\TedcmsHelper('tedcms', 'ted_');

	}
	public function actionIndex() {
		//从redis中获取采集队列
		$q = $GLOBALS['redis']->keys('card_counting');
		if(!$q){
			return;
		}
		//从队列中获取一个种子
		$seed = $q[0];
		$result = $result = $GLOBALS['redis']->get($seed);
		$result = json_decode($result,true);
		exec("python test.py {$result}",$out,$res);
		var_dump($out);
	}
}