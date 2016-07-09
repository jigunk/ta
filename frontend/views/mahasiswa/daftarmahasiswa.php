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

$this->title = 'Data Mahasiswa yang Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php Pjax::begin(); ?>   
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

            'judul',
            /*['attribute' => 'Program Studi','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->progdi0 ? $data->progdi0->nama_progdi : '';
            }],
            */
            /*
             ['attribute' => 'Dosen Penguji 1','value'=>function($data){
                 return $data->pembimbing_1 ? $data->pembimbing_1->nama : '';
            }],

             ['attribute' => 'Dosen Penguji 2','value'=>function($data){
                 return $data->penguji2 ? $data->penguji2->nama : '';
            }],
            */
            ['attribute' => 'Pembimbing 1','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->pembimbing1 ? $data->pembimbing1->nama : '';
            }],

            ['attribute' => 'Pembimbing 2','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->pembimbing2 ? $data->pembimbing2->nama : '';
            }],
            // 'foto',
            // 'catatan:ntext',
            // 'keterangan:ntext',
            // 'ipk',
            // 'status',
            // 'artikeljurnal',
            // 'cdaplikasi',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'sertifikat_profesi',
            // 'point_card',
            // 'periode',
            // 'sks',

        ],
    ]); ?>
<?php Pjax::end(); ?></div></div>
