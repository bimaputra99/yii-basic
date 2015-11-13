<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PelangganModel */

$this->title = 'Update Pelanggan Model: ' . ' ' . $model->id_pelanggan;
$this->params['breadcrumbs'][] = ['label' => 'Pelanggan Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pelanggan, 'url' => ['view', 'id' => $model->id_pelanggan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelanggan-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
