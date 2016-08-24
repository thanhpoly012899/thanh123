<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MaHD')->textInput() ?>

    <?= $form->field($model, 'NgayXuat')->textInput() ?>

    <?= $form->field($model, 'MaKH')->textInput() ?>

    <?= $form->field($model, 'KhachHang_MaKH')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
