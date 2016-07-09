<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaSearch */
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

    <?php // echo $form->field($model, 'pembimbing_1') ?>

    <?php // echo $form->field($model, 'pembimbing_2') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'ipk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'artikeljurnal') ?>

    <?php // echo $form->field($model, 'cdaplikasi') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'sertifikat_profesi') ?>

    <?php // echo $form->field($model, 'point_card') ?>

    <?php // echo $form->field($model, 'periode') ?>

    <?php // echo $form->field($model, 'sks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
