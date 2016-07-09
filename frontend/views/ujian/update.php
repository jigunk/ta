<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ujian */

$this->title = 'Update Ujian: ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Ujians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ujian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
