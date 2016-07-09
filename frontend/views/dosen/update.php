<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosen */

$this->title = 'Update Dosen: ' . $model->kd_dosen;
$this->params['breadcrumbs'][] = ['label' => 'Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_dosen, 'url' => ['view', 'id' => $model->kd_dosen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
