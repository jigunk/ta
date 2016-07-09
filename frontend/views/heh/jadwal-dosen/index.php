<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JadwalDosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jadwal Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_dosen',
            'hari',
            'jam_mulai',
            'jam_selesai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
