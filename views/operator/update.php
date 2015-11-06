<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OperatorModel */

$this->title = 'Update Operator Model: ' . ' ' . $model->id_operator;
$this->params['breadcrumbs'][] = ['label' => 'Operator Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_operator, 'url' => ['view', 'id' => $model->id_operator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operator-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
