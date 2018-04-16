<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crud */

$this->title = 'Update Crud: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NIM, 'url' => ['view', 'id' => $model->NIM]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
