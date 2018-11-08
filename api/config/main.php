<?php
$params = array_merge( require (__DIR__ . '/../../common/config/params.php'), require (__DIR__ . '/../../common/config/params-local.php'),
    require (__DIR__ . '/params.php'), require (__DIR__ . '/params-local.php') );

return [
    'id' => 'app-api',
    'basePath' => dirname( __DIR__ ),
    'bootstrap' => [
        'log'
    ],
    'modules' => [
        'v1' => [
            'class' => 'api\modules\v1\Module'
        ],
    ],
    'controllerNamespace' => 'api\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\app\User',
            'enableSession' => false,
            'enableAutoLogin' => false
        ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser'
            ]
        ],
        'response' => [
            'class' => 'yii\web\Response',
            'charset' => 'UTF-8',
            'on beforeSend' => function ($event) {
                /* @var $response yii\web\Response */
                $response = $event->sender;
                if($response->format != yii\web\Response::FORMAT_JSON) {
                    return;
                }
//                 if( $response->data !== null ) {
                    if( $response->isSuccessful ) {
                        // 如果非数组或者纯数组，套一层data
                        //array_keys($response->data) === array_keys(array_keys($response->data))
                        if(!is_array( $response->data ) || empty($response->data) || array_keys($response->data) === range(0, count($response->data) - 1)) {
                            $response->data = [
                                'data' => $response->data ,
                                'api_code' => 200
                            ];
                        }
                        else {
                            $response->data['api_code'] = 200;
                        }
                    }
                    else {
                        //data在有运行error或者exception是一维数组
                        //有model错误时是多维数组
                        //统一转化为一维数组
                        $error = $response->data;
                        if(isset($error['message'])) {
                            if(empty($error['message'])) {
                                $error['message'] = $error['name'];
                            }
                            $error = [$error];
                        }
                        $response->data = [
                            'api_code' => $response->statusCode+1,
                            'api_msg' => $error[0]['message']
                        ];
                    }
                    $response->statusCode = 200;
//                 }
            }
        ],
        'errorHandler' => [ ],
        'urlManager' => [
            'rules' => [
                // [
                // 'class' => 'yii\rest\UrlRule',
                // 'controller' => [
                // 'v1/user'
                // ]
                // ]
                //系统
                'GET v1/home/index' => 'v1/welcome/index',

            ]
        ]
    ],
    'params' => $params
];
