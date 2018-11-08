<?php
namespace api\common\controllers;

use yii\rest\Controller;
use api\common\filters\ApiAuth;
use common\models\app\User;
use api\common\filters\DataEncrypter;

class BaseController extends Controller {

    public function behaviors() {
        $behaviors = parent::behaviors();
        $behaviors ['authenticator'] = [ 
            'class' => ApiAuth::className() 
        ];
        $behaviors ['encrypter'] = [ 
            'class' => DataEncrypter::className() 
        ];
        return $behaviors;
    }

    /**
     * 获取当前登陆的user
     *
     * @return User
     */
    public function getUser() {
        return \Yii::$app->getUser()->identity;
    }

    /**
     * 获取某参数
     *
     * @param string $name
     * @param string $defaultValue
     * @return Ambigous <\yii\web\mixed, mixed>
     */
    public function getParam($name, $defaultValue = NULL, $isGet = false) {
        $request = \Yii::$app->getRequest();
        // var_export($request->getBodyParams());
        return $isGet ? $request->get( $name, $defaultValue ) : $request->getBodyParam( $name, $defaultValue );
    }

    /**
     * 获取所有参数
     * @param string $isGet
     * @return array
     */
    public function getParams($isGet = false) {
        $request = \Yii::$app->getRequest();
        return $isGet ? $request->getQueryParams() : $request->getBodyParams();
    }

    /**
     * 需要登录的actions
     *
     * @var array
     */
    public $needLoginActions = [ ];

    /**
     * 需要加密的actions
     *
     * @var array
     */
    public $needEncryptActions = [ ];
}