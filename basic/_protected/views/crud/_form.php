<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Crud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
