<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OperatorModel */

$this->title = 'Create Operator Model';
$this->params['breadcrumbs'][] = ['label' => 'Operator Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
