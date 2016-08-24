<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchChitiethd */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chitiethds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitiethd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MaHD',
            'MaSP',
            'TenSP',
            'SoLuong',
            'Gia',
            // 'HoaDon_MaHD',
            // 'SanPham_MaSP',


        ],
    ]); ?>
</div>
