<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UjianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ujian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Buat Jadwal Ujian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>   
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'nim',
            ['attribute' => 'Judul','value'=>function($data){
                 return $data->mahasiswa ? $data->mahasiswa->judul : '-';
            }],
            ['attribute' => 'Penguji 1','value'=>function($data){
                 return $data->penguji1 ? $data->penguji1->nama : '-';
            }],
            ['attribute' => 'Penguji 2','value'=>function($data){
                 return $data->penguji2 ? $data->penguji2->nama : '-';
            }],
            ['attribute' => 'Jadwal','value'=>function($data){
                $hari = [
                    1 => "Senin",
                    2 => "Selasa",
                    3 => "Rabu",
                    4 => "Kamis",
                    5 => "Jumat",

                ];

                 return $data->hari ? $hari[$data->hari] . "," .date("d-M-Y",strtotime($data->tanggal)) . "\n" .date("H.i",strtotime($data->jam_mulai))  . "-" . date("H.i",strtotime($data->jam_selesai)) : '-';
            }],
            'ruang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
