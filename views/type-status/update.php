<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TypeStatus $model */

$this->title = 'Update Type Status: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Type Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
