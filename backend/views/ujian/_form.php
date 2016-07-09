<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Mahasiswa;
use common\models\Dosen;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ujian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ujian-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?=
    $form->field($model, 'nim')->dropDownList(
        ArrayHelper::map(Mahasiswa::find()->all(),'nim','nama'),
        ['prompt'=>'Pilih Mahasiswa']
    )
    ?>

   <?=
    $form->field($model, 'penguji_1')->dropDownList(
        ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'),
        ['prompt'=>'Pilih penguji 1']
    )
    ?>

    <?=
        $form->field($model, 'penguji_2')->dropDownList(
        ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'),
        ['prompt'=>'Pilih User']
    )
    ?>
    <?= $form->field($model, 'hari')->dropDownlist([
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        ]
    ) ?>

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
