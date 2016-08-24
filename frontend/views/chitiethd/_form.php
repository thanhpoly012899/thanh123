<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chitiethd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaHD')->textInput() ?>

    <?= $form->field($model, 'MaSP')->textInput() ?>

    <?= $form->field($model, 'TenSP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoLuong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gia')->textInput() ?>

    <?= $form->field($model, 'HoaDon_MaHD')->textInput() ?>

    <?= $form->field($model, 'SanPham_MaSP')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
