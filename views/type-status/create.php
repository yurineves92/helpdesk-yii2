<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TypeStatus $model */

$this->title = 'Create Type Status';
$this->params['breadcrumbs'][] = ['label' => 'Type Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
