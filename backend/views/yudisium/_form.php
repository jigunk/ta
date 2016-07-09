<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ujian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'penguji_1')->textInput() ?>

    <?= $form->field($model, 'penguji_2')->textInput() ?>

    <?= $form->field($model, 'nilai')->textInput() ?>

    <?= $form->field($model, 'hari')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam_mulai')->textInput() ?>

    <?= $form->field($model, 'jam_selesai')->textInput() ?>

    <?= $form->field($model, 'ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'periode')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
