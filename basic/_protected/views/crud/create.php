<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Crud */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
