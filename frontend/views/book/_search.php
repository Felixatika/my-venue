<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bookId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'listingsId') ?>

    <?= $form->field($model, 'bookingDates') ?>

    <?= $form->field($model, 'bookingExtraRequest') ?>

    <?php // echo $form->field($model, 'totalAmount') ?>

    <?php // echo $form->field($model, 'bookingStatus') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
