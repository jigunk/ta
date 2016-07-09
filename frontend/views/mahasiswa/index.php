<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Mahasiswa;
use common\models\Dosen;
use common\models\Ujian;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="row">
<div class="col-md-5">
 
 
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'nim',
                    'nama',
                    ['attribute' => 'Program Studi','value'=>function($data){
                        /////// return $data->progdi->nama_progdi;
                        ////// var_dump($data->progdi0->nama_progdi);
                         return $data->progdiMahasiswa ? $data->progdiMahasiswa->nama_progdi : '';
                    }],
                    'judul:ntext',
                    ['attribute' => 'Pembimbing 1','value'=>function($data){
                         return $data->pembimbing1 ? $data->pembimbing1->nama : '';
                    }],

                    ['attribute' => 'Pembimbing 2','value'=>function($data){
                         return $data->pembimbing2 ? $data->pembimbing2->nama : '';
                    }],
                    /*['attribute' => 'Program Studi','value'=>function($data){
                        /////// return $data->progdi->nama_progdi;
                        ////// var_dump($data->progdi0->nama_progdi);
                         return $data->progdi0 ? $data->progdi0->nama_progdi : '';
                    }],
                    */
            ],
    ]); ?>
</div>


<!-- <div class="col-md-8">
 
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
  
            'judul:ntext',
            ['attribute' => 'Pembimbing 1','value'=>function($data){
                 return $data->pembimbing1 ? $data->pembimbing1->nama : '';
            }],

            ['attribute' => 'Pembimbing 2','value'=>function($data){
                 return $data->pembimbing2 ? $data->pembimbing2->nama : '';
            }],
                ],
    ]); ?>
</div> -->


 </div>
 </div>