<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\MainAppAsset;

MainAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>

        <?= $content ?>

<?php
$script = <<< JS
$(document).ready(function() {
        
    $('.grid-view').each(function(index, value) {
    if ($(this).children("table").hasClass("table-bordered")){
     $(this).children("table").removeClass("table-bordered");   
   }    
    if ($(this).parent().is("[data-pjax-container]") || !($(this).parent().hasClass("panel-body"))) {
        $(this).wrap("<div class='panel'><div class='panel-body'></div></div>");
    } 
});
});
JS;
$this->registerJs($script);
?>    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
