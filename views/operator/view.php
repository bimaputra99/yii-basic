<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\db\ActiveRecord;

/* @var $this yii\web\View */
/* @var $model app\models\OperatorModel */

$this->title = $model->id_operator;
$this->params['breadcrumbs'][] = ['label' => 'Operator Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="operator-model-view">

    <h1><?php echo "ID Operator : ".Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_operator], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_operator], [
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
            'id_operator',
            'nama',
            'jk',
            'alamat:ntext',
            'username',
            //'password',
            'foto:ntext',
        ],
    ]) ?>

</div>
