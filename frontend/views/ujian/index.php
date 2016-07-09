<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UjianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumuman Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1><!--Row with two equal columns-->
    <div class="row">
        <div class="col-md-5">
            <?php Pjax::begin(); ?>   
            <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            ['attribute' => 'Nim','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->nim0 ? $data->nim0->nim : '';
            }],
            ['attribute' => 'Nama ','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->nim0 ? $data->nim0->nama : '';
            }],
            ['attribute' => 'Judul ','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->nim0 ? $data->nim0->judul : '';
            }],

            ['attribute' => 'Penguji 1 ','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->penguji1 ? $data->penguji1->nama : '';
            }],
            ['attribute' => 'Penguji 2 ','value'=>function($data){
                /////// return $data->progdi->nama_progdi;
                ////// var_dump($data->progdi0->nama_progdi);
                 return $data->penguji2 ? $data->penguji2->nama : '';
            }],
                  ],
        ]); ?>
    <?php Pjax::end(); ?></div>

        <div class="col-md-8"> 
            <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hari',
            'jam_mulai',
            'jam_selesai',
            'ruang',

        ],
    ]); ?>
</div>
</div>
    
    </div>