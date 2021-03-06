<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ListingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Listings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'listingsId',
            'lcId',
            'listingsTypeId',
            'listingName',
            'basePrice',
            //'deposit',
            //'listingDesc',
            //'verificationStatus',
            //'bookingStatus',
            //'hasMaximumGuests',
            //'maximumGuests',
            //'hasAmmenities',
            //'keywords:ntext',
            //'allowInstantBooking',
            //'createdBy',
            //'createdAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
