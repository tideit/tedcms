<?php
namespace api\common\controllers;

use common\util\Constants;
use common\models\app\GoodsCategory;

;
use common\models\app\Homepage;
use common\util\CacheUtil;
use common\models\app\Article;

class WelcomeController extends BaseController
{
    public $needLoginActions = [];

    /**
     * @api {post} /article/index 文章列表
     * @apiVersion 0.1.0
     *
     * @apiGroup Article
     *
     * @apiParam {Number} page    分页页码
     * @apiParam {Number} page_size    分页大小、条数
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *          "code":200,
     *          "items": [
     *              {
     *                  "id": "1"，
     *                  "title": "test1"，
     *                  ...
     *              },
     *              {
     *                  "id": "1"，
     *                  "title": "test1"，
     *                  ...
     *              }
     *          ]
     *     }
     *
     */
    public function actionIndex()
    {
    	d('hello');
    }

}