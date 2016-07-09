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

$this->title = 'Daftar Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambahkan Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
 Pjax::begin(); 
 $belum = "<font color=red>Belum</font>";
 ?>   
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            'no_telp',
            // 'ipk',
            // 'foto',
              ['attribute' => 'Foto','value'=>function($data){
                 return $data->foto ? 'v' : '-';
            }],
              ['attribute' => 'Bendel','value'=>function($data){
                 return $data->artikeljurnal ? 'v' : '-';
            }],
             ['attribute' => 'CD','value'=>function($data){
                 return $data->cdaplikasi ? 'v' : '-';
            }],
             ['attribute' => 'Sertifikat','value'=>function($data){
                 return $data->sertifikat_profesi ? 'v' : '-';
            }],
             ['attribute' => 'Point','value'=>function($data){
                 return $data->point_card ? 'v' : '-';
            }],
            
            // 'artikeljurnal',
            // 'cdaplikasi',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'sertifikat_profesi',
            // 'point_card',
            // 'periode',
            // 'sks',
            // 'catatan:ntext',
            // 'keterangan:ntext',
            // 'status',
            // 'progdi',
            // ['attribute' => 'Program Studi','value'=>function($data){
            //     /////// return $data->progdi->nama_progdi;
            //     ////// var_dump($data->progdi0->nama_progdi);
            //      return $data->progdiMahasiswa ? $data->progdiMahasiswa->nama_progdi : '';
            // }],
            

            // 'judul:ntext',
            
            //  ['attribute' => 'Dosen Penguji 1','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->penguji_1 : '';
            // }],

            //  ['attribute' => 'Dosen Penguji 2','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->penguji_2 : '';
            // }],
            
            // ['attribute' => 'pembimbing 1','value'=>function($data){
            //      return $data->pembimbing1 ? $data->pembimbing1->nama : '';
            // }],
            // ['attribute' => 'pembimbing 2','value'=>function($data){
            //      return $data->pembimbing2 ? $data->pembimbing2->nama : '';
            // }],

            // ['attribute' => 'Hari Ujian','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->hari : '';
            // }],

            //  ['attribute' => 'Tanggal Ujian','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->tanggal : '';
            // }],

            // ['attribute' => 'Jam Mulai','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->jam_mulai : '';
            // }],

            // ['attribute' => 'Jam Selesai','value'=>function($data){
            //      return $data->ujian0 ? $data->ujian0->jam_selesai : '';
            // }],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>