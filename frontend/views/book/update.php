<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */

$this->title = 'Update Booking: ' . $model->bookId;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookId, 'url' => ['view', 'id' => $model->bookId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
