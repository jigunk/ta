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

    <?php Pjax::begin(); ?>   
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'nim',
            'penguji_1',
            'penguji_2',
            'hari',
            'tanggal',
            'jam_mulai',
            'jam_selesai',
            'ruang',
            'periode',

        ],
    ]); ?></div>