<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Progdi;
use backend\models\Dosen;
use backend\models\Mahasiswa;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model,'progdi')->dropDownList(
        ArrayHelper::map(Progdi::find()->all(),'kode_progdi','nama_progdi')
    );
?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?=
$form->field($model,'status')->dropDownList(
        [
        0=> 'Baru',
         1=> 'Ulang'
        ]
    );
?>

    <?=
$form->field($model,'pembimbing1')->dropDownList(
        ArrayHelper::map(Dosen::find()->all(),'kode_dosen','nama')
    );
?>

    <?=
$form->field($model,'pembimbing2')->dropDownList(
        ArrayHelper::map(Dosen::find()->all(),'kode_dosen','nama')
    );
?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
