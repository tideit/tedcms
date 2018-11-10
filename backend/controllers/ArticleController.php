<?php
/**
 * Created by PhpStorm.
 * User: litid
 * Date: 2018/11/9
 * Time: 16:26
 */
namespace backend\controllers;
class ArticleController extends BaseController
{
	public function actionAdd(){
		return $this->render('add');
	}
	public function actionEdit(){
		return $this->render('edit');
	}
	public function actionAllowurlEdit(){
		return $this->render('allowurl_edit');
	}
	public function actionCoonepageRule(){
		return $this->render('coonepage_rule');
	}
	public function actionDescription(){
		return $this->render('description');
	}
    public function actionKeywords(){
		return $this->render('keywords');
    }
    public function actionKeywordsMake(){
		return $this->render('keywords_make');
    }
    public function actionKeywordsSelect()
    {
    	return $this->render('keywords_select');
    }
    public function actionSelectSw(){
		return $this->render('select_sw');
    }
    public function actionSourceEdit(){
		return $this->render('source_edit');
    }
    public function actionStringMix(){
		return $this->render('string_mix');
    }
    public function actionTemplateRand(){
		return $this->render('template_rand');
    }
    public function actionTestSame(){
		return $this->render('test_same');
    }
    public function actionTestTitle(){
		return $this->render('test_title');
    }
    public function actionWriterEdit(){
		return $this->render('writer_edit');
    }
}