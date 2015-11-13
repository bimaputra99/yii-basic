<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MotorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motor Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Motor Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_motor',
            'nama_motor',
            'th_keluar',
            'by_sewa',
            //'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
