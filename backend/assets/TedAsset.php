<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;
use backend\assets\AppAsset;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TedAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/plugins/font-awesome/css/font-awesome.min.css',
        'assets/plugins/uniform/css/uniform.default.css',
        'assets/css/style-metronic.css',
        'assets/css/style.css',
        'assets/css/style-responsive.css',
        'assets/css/plugins.css',
        'assets/css/themes/default.css',
    ];
    public $js = [
        'assets/plugins/jquery-1.10.2.min.js',
    ];
    public $depends = [
        
    ];
}
