<?php
use Yii;
use yii\widgets\Menu;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<?php $this->beginContent('@app/views/layouts/mainWrap.php'); $action= Yii::$app->controller->action->id;?>

<!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="<?php echo Url::home(); ?>" title="Перейти на главную"><!--i class="fa fa-home"></i--></a>
            </div>

        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <?php 
                    echo Menu::widget([
                        'items' => app\components\MenuHelper::getMenu(),
                        'encodeLabels' => false,
                        'options' => ['class'=>'sidebar-nav'],
//                        'activeCssClass'=>'current',
                        'submenuTemplate' => "\n<ul class='submenu'>\n{items}\n</ul>\n",
//                        'activateParents' => true,
//                        'activateItems' => true,
//                        'firstItemCssClass'=>'active current hasSub',
                        ]);
                ?>
            </div>
            <div class="footer-widget">
                <div class="footer-gradient"></div>
                
                <div class="sidebar-footer clearfix">
                    <a class="pull-left toggle_fullscreen" href="#" data-toggle="tooltip" data-placement="top" title="Полноэкранный режим"><i class="fa fa-arrows-alt"></i></a>
                    <a class="pull-left" href="<?php echo Url::toRoute('/site/logout');?>" data-toggle="tooltip" data-placement="top" title="Выйти"><i class="fa fa-power-off"></i></a>
                </div>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
<!--            <div class="panel panel-default">
                <div class="panel-body">        -->
                    <?= $content ?>
<!--                </div>               
            </div>-->
            
            
            
         <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Биллинг <?= date('Y') ?></p>
            </div>
        </footer>   
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    

<?php $this->endContent(); ?>

