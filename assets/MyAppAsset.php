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
class MyAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/themeforest/icons/icons.css',
        'css/themeforest/bootstrap.min.css',
        'css/themeforest/plugins.css',
        'css/main.css',
        'plugin/pickadate/themes/classic.css',
        'plugin/pickadate/themes/classic.date.css',
        'plugin/pickadate/themes/classic.time.css',
        'plugin/datatables/dataTables.css',
        'plugin/datatables/dataTables.tableTools.css',
        'plugin/charts-circliful/css/jquery.circliful.css'
    ];
    
   
}
