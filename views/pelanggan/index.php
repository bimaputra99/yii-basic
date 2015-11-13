<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PelangganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pelanggan Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pelanggan Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pelanggan',
            'nama',
            'alamat:ntext',
            'telp',
            'identitas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
