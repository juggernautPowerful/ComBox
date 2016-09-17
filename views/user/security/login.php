<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dektrium\user\widgets\Connect;
/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="container" id="login-block">
<div class="row">
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
        <div class="login-box clearfix animated flipInY">
            <div class="page-icon animated bounceInDown">
                <img src="img/account/user-icon.png" alt="Key icon">
            </div>
            <div class="login-logo">
                <img src="img/account/login-logo.png" alt="ComboBox логотип" style="width: 151px; height: 96px;">
            </div>
            <hr>
            <div class="login-form">
                <!-- BEGIN ERROR BOX -->
                <div class="alert alert-danger hide">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>Error!</h4>
                    Your Error Message goes here
                </div>
                <!-- END ERROR BOX -->
                <?php $form = ActiveForm::begin([
                    'id'                     => 'login-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                    'validateOnType'         => false,
                    'validateOnChange'       => false,
                ]) ?>

                <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'input-field form-control user', 'placeholder'=>'Введите логин', 'tabindex' => '1']])->label(false, ['style'=>'display:none']) ?>

                <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'input-field form-control password', 'placeholder'=>'Введите пароль', 'tabindex' => '2']])->passwordInput()->
                        label(false, ['style'=>'display:none']
//                        label(Yii::t('user', 'Password') . ($module->enablePasswordRecovery ? ' (' . Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']) . ')' : '')
                        ) 
                        ?>

                <!--?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?-->

                <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-login', 'tabindex' => '3']) ?>

                <?php ActiveForm::end(); ?>
            </div>

<!--         <p class="text-center">
            <!--?= Html::a(Yii::t('user', 'Еще не зарегистрированы? Зарегистрируйтесь!'), ['/user/registration/register']) ?>.
        </p>-->
        <?php if ($module->enableConfirmation): ?>
            <p class="text-center">
                <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
            </p>
        <?php endif ?>
        <?= Connect::widget([
            'baseAuthUrl' => ['/user/security/auth']
        ]) ?>
    </div>
         </div>
</div>
</div>