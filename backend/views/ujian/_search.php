<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UjianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'penguji_1') ?>

    <?= $form->field($model, 'penguji_2') ?>

    <?= $form->field($model, 'nilai') ?>

    <?= $form->field($model, 'hari') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'jam_mulai') ?>

    <?php // echo $form->field($model, 'jam_selesai') ?>

    <?php // echo $form->field($model, 'ruang') ?>

    <?php // echo $form->field($model, 'periode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
