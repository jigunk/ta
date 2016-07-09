<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Progdi;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1>Pengumuman</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            //'no_telp',
            //'progdi',
            ['attribute' => 'Program Studi','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->progdi0 ? $data->progdi0->nama_progdi : '';
            }],
            
            'judul:ntext',
            //'status_proposal',
            //'pembimbing1',
            ],
            ])?>
</div>
         <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             ['attribute' => 'Usulan Pembimbing 1','value'=>function($data){
                 return $data->dosen ? $data->dosen->nama : '';
            }],
            ['attribute' => 'Usulan Pembimbing 2','value'=>function($data){
                 return $data->dosen2 ? $data->dosen2->nama : '';
            }],
            //'pembimbing2',
            // 'nilai_dt:ntext',
            // 'belum_ambil:ntext',
             'catatan:ntext',
            //'abstrak:ntext',
            // 'foto',
            // 'bendel_proposal',
            // 'KST',
            // 'transkrip_nilai',
        ],
    ]); ?>

</div>