<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MotorModel */

$this->title = $model->id_motor;
$this->params['breadcrumbs'][] = ['label' => 'Motor Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_motor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_motor], [
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
            'id_motor',
            'nama_motor',
            'th_keluar',
            'by_sewa',
            'gambar',
        ],
    ]) ?>

</div>
