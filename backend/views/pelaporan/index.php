<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pengajar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dosen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dosen',
            'nama',
            // 'username',
            // 'password',
            // 'kd_progdi',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'    => '{view}{update}{delete}',
                'buttons' => [
                     'view' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-book"></span>', $url, [
                                        'title' => Yii::t('yii', 'Lihat Laporan'),
                                ]); 
                            }
                ],     
                'controller' => 'pelaporan'
            ],
        ],
    ]); ?>
</div>
