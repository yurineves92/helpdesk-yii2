<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1 class="h3 mb-3 fw-normal"><?= Html::encode($this->title) ?></h1>

    <p>Have account? <a href="/auth/login">Register!</a></p>

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'form-floating'],
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'invalid-feedback'],
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <div>
            <?= Html::submitButton('Login', ['class' => 'w-100 btn btn-lg btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <p class="mt-5 mb-3 text-muted">© Helpdesk 2022</p>
    <?php ActiveForm::end(); ?>
</div>