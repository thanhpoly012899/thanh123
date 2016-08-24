<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethd */

$this->title = $model->MaHD;
$this->params['breadcrumbs'][] = ['label' => 'Chitiethds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitiethd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'MaHD' => $model->MaHD, 'MaSP' => $model->MaSP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'MaHD' => $model->MaHD, 'MaSP' => $model->MaSP], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MaHD',
            'MaSP',
            'TenSP',
            'SoLuong',
            'Gia',
            'HoaDon_MaHD',
            'SanPham_MaSP',
        ],
    ]) ?>

</div>
