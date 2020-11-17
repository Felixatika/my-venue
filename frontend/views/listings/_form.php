<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lcId')->textInput() ?>

    <?= $form->field($model, 'listingsTypeId')->textInput() ?>

    <?= $form->field($model, 'listingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'basePrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deposit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'listingDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verificationStatus')->textInput() ?>

    <?= $form->field($model, 'bookingStatus')->textInput() ?>

    <?= $form->field($model, 'hasMaximumGuests')->textInput() ?>

    <?= $form->field($model, 'maximumGuests')->textInput() ?>

    <?= $form->field($model, 'hasAmmenities')->textInput() ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'allowInstantBooking')->textInput() ?>

    <?= $form->field($model, 'createdBy')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
