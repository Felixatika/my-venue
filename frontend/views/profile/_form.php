<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container">

 <div class="row">
     <div class="col-md-12">


    <div class="profile-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userId')->textInput() ?>

        <?= $form->field($model, 'createdBy')->textInput() ?>

        <?= $form->field($model, 'createdAt')->textInput() ?>
        <?= $form->field($model, 'userId')->textInput() ?>

<?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'profilePic')->fileInput(['maxlength' => true]) ?>

<?= $form->field($model, 'countryId')->textInput() ?>

<?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'currencyId')->textInput() ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'fb')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'googlePlus')->textInput(['maxlength' => true]) ?>


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

</div>





</div>

</div>

</div>