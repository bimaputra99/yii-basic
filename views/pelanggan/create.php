<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PelangganModel */

$this->title = 'Create Pelanggan Model';
$this->params['breadcrumbs'][] = ['label' => 'Pelanggan Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
