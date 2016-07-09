<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'progdi') ?>

    <?= $form->field($model, 'judul') ?>

    <?php // echo $form->field($model, 'status_proposal') ?>

    <?php // echo $form->field($model, 'pembimbing1') ?>

    <?php // echo $form->field($model, 'pembimbing2') ?>

    <?php // echo $form->field($model, 'nilai_dt') ?>

    <?php // echo $form->field($model, 'belum_ambil') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'abstrak') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'bendel_proposal') ?>

    <?php // echo $form->field($model, 'KST') ?>

    <?php // echo $form->field($model, 'transkrip_nilai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
