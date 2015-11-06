<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OperatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Operator';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-model-index">

    <h1><?php Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Operator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_operator',
            'nama',
            'jk',
            'alamat:ntext',
            'username',
            // 'password',
            // 'foto:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
