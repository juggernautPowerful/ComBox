<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Client */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_client], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_client], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_client',
            'position',
            'surname',
            'name',
            'patrname',
            'signer_surname',
            'signer_name',
            'signer_partname',
            'legal_address',
            'checking_account',
            'email:email',
            'class_id_class',
            'comment',
            'phone',
            'ip',
            'login',
            'status',
            'TIN',
            'CRAT',
            'PSRN',
            'organization',
            'individual_entrepreneur_id_country',
            'client_type_id_type',
            'client_doc_type_id_doc',
            'client_nsi_bank_id',
            'client_nsi_zipcode_id_index',
        ],
    ]) ?>

</div>
