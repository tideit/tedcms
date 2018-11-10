<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 15:47
 */
namespace backend\controllers;
use common\helpers\CharsetHelper;

class AlbumController extends BaseController{
	public function actionTesthtml()
	{
		$myhtml = isset($_REQUEST['myhtml'])?$_REQUEST['myhtml']:'';
		$myhtml = CharsetHelper::UnicodeUrl2Gbk(stripslashes($myhtml));
		echo "<div class='coolbg61'>[<a href='#' onclick='javascript:HideObj(\"_myhtml\")'>关闭</a>]</div>\r\n";
		preg_match_all("/(src|SRC)=[\"|'| ]{0,}(http:\/\/(.*)\.(gif|jpg|jpeg|png))/isU", $myhtml, $img_array);
		$img_array = array_unique($img_array[2]);
		echo "<div class='coolbg62'><xmp>";
		echo "捕获的图片：\r\n";
		print_r($img_array);
		echo "</xmp></div>\r\n";
	}
	public function actionAdd(){
        return $this->render('add');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
}