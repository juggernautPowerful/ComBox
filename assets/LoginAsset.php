<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/themeforest/icons/icons.min.css',
        'css/themeforest/bootstrap.min.css',
        'css/themeforest/plugins.min.css',
        'css/themeforest/style.css',
        'css/themeforest/animate-custom.css',
        
    ];
    
    public $js = [
        'plugin/modernizr/modernizr-2.6.2-respond-1.1.0.min.js',
        'plugin/jquery-ui/jquery-ui-1.10.4.min.js',
        'plugin/jquery-mobile/jquery.mobile-1.4.2.js',
        'plugin/bootstrap/bootstrap.min.js',
        'plugin/jquery.cookie.min.js',
        'js/themeforest/account.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
