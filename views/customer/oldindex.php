<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Поиск клиента';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
//echo '<pre>';
//var_dump($_REQUEST);
$i = 0;
$flag = true;
if (isset($_REQUEST['ClientSearch'])){
    $count = count($_REQUEST['ClientSearch']);
    foreach ($_REQUEST['ClientSearch'] as $k => $v){
        if (empty($v)) $i++;
    }
    if ($i == $count){
        $flag = false;
    }
}
?>

    <h2><?= Html::encode($this->title) ?></h2>
    <div class="row">
    <div class="col-sm-12 col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body"> 
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    
 <?php if (isset($_REQUEST['ClientSearch']) && $flag){   
    Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            [
                'class' => 'kartik\grid\ActionColumn',
                'template' => '{view}'
            ],
            'organization',
            'TIN', 
            'legal_address',
             'phone',
             'ip', 
//             [
//                 'attribute' => 'individual_entrepreneur_id_country',
//                 'value' => 'IndividualEntrepreneurIdCountry.name',
//                 'label' => 'страна регистрации не резидента',
//                 'format' => 'paragraphs'
//             ],
////            'id_client',
//            'surname',
//            'name',
//            'patrname',
//            'legal_address',
//            // 'BIC',
            // 'bank',
            // 'checking_account',
            // 'correspondent_account',
            // 'mailing_address_id_address',
            // 'email:email',
            // 'class_id_class',
            // 'comment',
            // 'phone',
            // 'ip',
            // 'login',
            // 'status',
            // 'reason_id_reason',

            // 'CRAT',
            // 'PSRN',
            // 'organization',
            // 'individual_entrepreneur_id_country',
            // 'client_type_id_type',

        ],
    ]); ?>
<?php Pjax::end(); 
 }
?>
            </div>
        </div>
    </div>
</div>
