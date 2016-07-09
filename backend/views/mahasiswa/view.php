<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mahasiswa */

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
            'pembimbing_1',
            'pembimbing_2',
            'foto',
            'catatan:ntext',
            'keterangan:ntext',
            'ipk',
            'status',
            'artikeljurnal',
            'cdaplikasi',
            'tempat_lahir',
            'tanggal_lahir',
            'sertifikat_profesi',
            'point_card',
            'periode',
            'sks',
        ],
    ]) ?>

</div>
