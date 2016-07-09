<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Mahasiswa;
use common\models\Dosen;
use common\models\Ujian;
?>

<style type="text/css">
	.center{
		text-align: center;
	}

</style>

<div class="container">
<div class="row">
<div class="col-md-5">
 
 
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'kd_dosen',
            'label' => 'Kode Dosen',
            ],
            'nama',

            
            ],
    ]); ?>
</div>
</div>