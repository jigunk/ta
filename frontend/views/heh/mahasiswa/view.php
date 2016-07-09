<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama',
            'no_telp',
            'progdi',
            'judul:ntext',
            'status',
            'pembimbing1',
            'pembimbing2',
            'nilai_dt:ntext',
            'belum_ambil:ntext',
            'catatan:ntext',
            'abstrak:ntext',
            'foto',
            'bendel_proposal',
            'KST',
            'transkrip_nilai',
        ],
    ]) ?>

</div>
