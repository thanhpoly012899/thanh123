<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchHoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MaHD') ?>

    <?= $form->field($model, 'NgayXuat') ?>

    <?= $form->field($model, 'MaKH') ?>

    <?= $form->field($model, 'KhachHang_MaKH') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
