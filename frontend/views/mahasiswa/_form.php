<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Progdi;
use common\models\Dosen;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'progdi')->dropDownlist(
        ArrayHelper::map(Progdi::find()->all(),'kd_progdi','nama_progdi'),
        ['prompt'=> 'Pilih Progdi']
    ) ?>

    <?= $form->field($model, 'judul')->textarea(['rows' => 6]) ?>

      <?= $form->field($model, 'pembimbing_1')->dropDownlist(
        ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'),
        ['prompt'=> 'Pilih Pembimbing 1']
    ) ?>

    <?= $form->field($model, 'pembimbing_2')->dropDownlist(
        ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'),
        ['prompt'=> 'Pilih Pembimbing 2']
    ) ?>

    <?= $form->field($model, 'ipk')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'tanggal_lahir')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'periode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sks')->textInput(['maxlength' => true]) ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Daftar Ujian' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
