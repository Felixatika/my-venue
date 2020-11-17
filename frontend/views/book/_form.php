<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'listingsId')->textInput() ?>

    <?= $form->field($model, 'bookingDates')->textInput() ?>

    <?= $form->field($model, 'bookingExtraRequest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookingStatus')->textInput() ?>

    <?= $form->field($model, 'createdBy')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
