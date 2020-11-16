<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<
<br>
<!-- slider carousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
  <div class="carousel-inner row w-100 mx-auto">
    <div class="carousel-item col-md-6 col-sm-6 col-md-4 col-lg-2 active">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
      <img class="img-fluid mx-auto d-block" src=".jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-faded" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="container">
<!-- listings title -->
<div class="row">
  <div class="col-md-8 padding-right-30">
          <div id="titlebar" class="listing-titlebar">
             <div class="listing-titlebar-title">
               <h2>Castle Forest <span class="listing-tag">Eat & Drink</span></h2><span>
               <a href="#listing-location" class="listing-address">
               <i class="fa fa-map-marker"></i>Kenya</a></span>
             <div class="star-rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-o"></i>
        <div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
      </div>
    </div>
  </div>
  <!-- end title -->

  <!-- nav tabs -->
    <div class="col">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews</a>
          </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
          Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
          Cosby sweater eu banh mi, qui irure terry richardson ex squid.
          Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
        Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
        Cosby sweater eu banh mi, qui irure terry richardson ex squid.
        Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
     </div>
   </div>
</div>
  <div class="col-md-4">
     <p class="">
         <button type="button" class="btn btn-success btn-lg btn-block"><i class="fa fa-check-circle-o"></i> Verified Listing</button>
     </p>
     <div class="card" >
       <div class="card-body">
         <h5 class="card-title"><i class="fa fa-calendar-check-o"></i> Booking</h5>
         <hr>
           <div class="input-group">
            <input type="text" class="form-control" placeholder="20/10/2020" aria-label="Username" aria-describedby="basic-addon1">
          </div>
            <input type="text" class="form-control" placeholder="Time Slots" aria-label="Username" aria-describedby="basic-addon1">

            <input type="text" class="form-control" placeholder="Guests" aria-label="Username" aria-describedby="basic-addon1">

       <p class="">
           <?= Html::a('Request to Book', ['create'], ['class' => 'btn btn-danger btn-lg btn-block']) ?>
       </p>

     </div>
   </div>
 </div>
</div>
</div>




    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php /* GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bookId',
            'userId',
            'listingsId',
            'bookingDates',
            'bookingExtraRequest',
            //'totalAmount',
            //'bookingStatus',
            //'createdBy',
            //'createdAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);*/ ?>
