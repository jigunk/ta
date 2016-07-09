<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Bimbingan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-bimbingan">
    <h1><?= Html::encode($this->title) ?></h1>
    <?=
    	GridView::widget([
    		'dataProvider'=> $dataProvider,
    		'columns' =>[
    		['class' => 'yii\grid\SerialColumn'],
    		'nim',
    		'nama',
            //'no_telp',
            'judul',
    		//'pembimbing1',
            //'pembimbing2'
    		],
    		]);
    	    ?>	
</div>
