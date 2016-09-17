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
class MainAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/themeforest/icons/icons.css',
        'css/themeforest/bootstrap.css',
        'css/themeforest/plugins.css',
        'css/themeforest/style.css',
        'plugin/pickadate/themes/classic.css',
        'plugin/pickadate/themes/classic.date.css',
        'plugin/pickadate/themes/classic.time.css',
        'plugin/datatables/dataTables.css',
        'plugin/datatables/dataTables.tableTools.css',
        'plugin/charts-circliful/css/jquery.circliful.css',
        'css/themeforest/animate-custom.css','css/themeforest/style.css',
        
    ];
    
    public $js = [
        'plugin/modernizr/modernizr-2.6.2-respond-1.1.0.min.js',
//        'plugin/jquery-1.11.js',
        'plugin/jquery-ui/jquery-ui-1.10.4.min.js',
//        'plugin/jquery-mobile/jquery.mobile-1.4.2.js',
        'plugin/bootstrap/bootstrap.min.js',
        'plugin/bootstrap-dropdown/bootstrap-hover-dropdown.min.js',
        'plugin/bootstrap-select/bootstrap-select.js',
        'plugin/bootstrap-select/i18n/defaults-ru-RU.js',
        'plugin/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'plugin/mmenu/js/jquery.mmenu.min.all.js',
        'plugin/nprogress/nprogress.js',
        'plugin/charts-sparkline/sparkline.min.js',
        'plugin/breakpoints/breakpoints.js',
        'plugin/numerator/jquery-numerator.js',
        'plugin/jquery.cookie.min.js',
        'plugin/pickadate/picker.js',
        'plugin/pickadate/picker.date.js',
        'plugin/pickadate/translations/ru_RU.js',
        'plugin/bootstrap-progressbar/bootstrap-progressbar.js',
        'plugin/parsley/parsley.min.js',
        'plugin/parsley/parsley.extend.js',
        'plugin/parsley/i18n/ru.js',
        'plugin/charts-circliful/js/jquery.circliful.min.js',
        'plugin/datatables/dynamic/jquery.dataTables.min.js',
        'plugin/datatables/dataTables.bootstrap.js',
        'plugin/datatables/dataTables.tableTools.js',
        'plugin/datatables/table.editable.js',
        'js/themeforest/table_dynamic.js',
        
        'js/themeforest/account.js',
        'js/themeforest/application.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\web\JqueryAsset',
//        'yii\widgets\ActiveFormAsset',
//        'yii\validators\ValidationAsset',
    ];
}
