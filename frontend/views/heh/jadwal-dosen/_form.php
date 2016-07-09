<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JadwalDosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_dosen')->textInput() ?>

    <?=
$form->field($model,'hari')->dropDownList(
        [
        0=> 'Senin',
         1=> 'Selasa',
         2=>'Rabu',
         3=>'Kamis',
         4=>'Jumat'
        ]
    );
?>

    <?= $form->field($model, 'jam_mulai')->textInput() ?>

    <?= $form->field($model, 'jam_selesai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
