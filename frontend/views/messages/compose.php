<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Messages */
/* @var $form yii\widgets\ActiveForm */
$users = ArrayHelper::map(User::find()->all(), 'id', 'email');
?>

<div class="messages-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row with-forms">
        <div class="col-md-12">
            <h5>Send By<i class="tip" data-tip-content="Sender"></i></h5>
            <?= $form->field($model, 'senderId')->dropDownList($users,['placeholder'=>'Select Email'])->label(false) ?>
        </div>
    </div>


    <div class="row with-forms">
        <div class="col-md-12">
            <h5>Send To<i class="tip" data-tip-content="Receiver"></i></h5>
                <?= $form->field($model, 'receiverId')->dropDownList($users,['placeholder'=>'Select Email'])->label(false) ?>
        </div>
    </div>


    <div class="row with-forms">
            <div class="col-md-12">
                <h5>Message<i class="tip" data-tip-content="Type Message"></i></h5>
                <?= $form->field($model, 'message')->textarea(['rows' => 6])->label(false) ?>
            </div>
    </div>

    

    <!-- <?= $form->field($model, 'sentAt')->textInput() ?> -->

    <!-- <?= $form->field($model, 'status')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-info']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>



