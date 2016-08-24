<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethd */

$this->title = 'Update Chitiethd: ' . $model->MaHD;
$this->params['breadcrumbs'][] = ['label' => 'Chitiethds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MaHD, 'url' => ['view', 'MaHD' => $model->MaHD, 'MaSP' => $model->MaSP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chitiethd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
