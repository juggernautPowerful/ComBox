<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_client',
            'position',
            'surname',
            'name',
            'patrname',
            // 'signer_surname',
            // 'signer_name',
            // 'signer_partname',
            // 'legal_address',
            // 'checking_account',
            // 'email:email',
            // 'class_id_class',
            // 'comment',
            // 'phone',
            // 'ip',
            // 'login',
            // 'status',
            // 'TIN',
            // 'CRAT',
            // 'PSRN',
            // 'organization',
            // 'individual_entrepreneur_id_country',
            // 'client_type_id_type',
            // 'client_doc_type_id_doc',
            // 'client_nsi_bank_id',
            // 'client_nsi_zipcode_id_index',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
