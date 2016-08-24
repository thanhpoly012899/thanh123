<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchHoadon */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hoadons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MaHD',
            'NgayXuat',
            'MaKH',
            'KhachHang_MaKH',


        ],
    ]); ?>
</div>
