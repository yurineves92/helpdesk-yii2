<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1 class="h3 mb-3 fw-normal"><?= Html::encode($this->title) ?></h1>

    <p>Create account? <a href="/auth/register">Register!</a></p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'form-floating'],
            'inputOptions' => ['class' => 'form-control'],
            'errorOptions' => ['class' => 'invalid-feedback'],
        ],
    ]); ?>

    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"checkbox mb-3\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <div>
            <?= Html::submitButton('Login', ['class' => 'w-100 btn btn-lg btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <p class="mt-5 mb-3 text-muted">© Helpdesk 2022</p>
    <?php ActiveForm::end(); ?>
</div>