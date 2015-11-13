<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MotorModel */

$this->title = 'Update Motor Model: ' . ' ' . $model->id_motor;
$this->params['breadcrumbs'][] = ['label' => 'Motor Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_motor, 'url' => ['view', 'id' => $model->id_motor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motor-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
