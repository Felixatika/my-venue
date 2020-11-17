<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'VENUES';
?>
<div class="site-index"> 
    
     <div class="container">
      
            <div class="row  float-center">
                <div class="col-lg-8 d-flex justify-content-center p-2 bg-dark rounded rounded-pill shadow-sm mb-4  searches">
                    <div class="row">
                        <div class="none col-lg-4 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="What are you looking for?">
                        </div>
                        <div class="none col-lg-3 col-md-2 col-sm-12 p-0" >
                            <input type="text" class="form-control search-slt" placeholder="Location">
                        </div>
                        <div class="none col-lg-4 col-md-3 col-sm-12 p-0">
                          <select class="form-control search-slt" id="exampleFormControlSelect1">
                                    <option>All Categories</option>
                                    <option>Hotels</option>
                                    <option>Events</option>
                                    <option>Restaurants</option>
                                    <option>Shops</option>
                                    <option>Fitness</option>
                                    <option>Open Spaces</option>
                                    </select>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn"><i class="fa fa-search"></i></button></button>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
            </div>
          </div>

    <div class="explore">
        <h1 >Venues</h1>
        <h1 >Near Me</h1>
       <p><button type="button" class="btn btn-secondary">Explore Nearby venues</button></p><br><br><br><br>
    </div>

    
</div>


<div class="container-fluid">
<div class="row">

<div class="popular-category">
    <h2 class="text-center"> Popular Categories</h1>
    <div class="col-md-12 ">
    <div class="row listing-list">
      <div class="col-md-3 partition"></div>
    <div class="col-md-6 partition">
      <div class="row ">
    
    <div class="col-md-3 ">
   
    <div class="view overlay card card-category border border-light ">
            <i class="fa fa-cutlery fa-4x d-flex justify-content-center " style="color: #F91942" aria-hidden="true"></i>
            <div class="mask rgba-pink-strong">
		<p class="font-weight-light text-center">Eat &amp; Drink</p></div>
	    </div>
    

    
    </div>
    
    
    <div class="col-md-3 ">
    <div class="single-card  ">
    <div class="card card-category border border-light">
          <i class="fa fa-h-square fa-4x d-flex justify-content-center" style="color: #F91942" aria-hidden="true"></i>
	    <p class="font-weight-light text-center">Hotels</p>
	    </div>
    </div>

    
    </div>
   
    <div class="col-md-3 ">
    <div class="single-card  ">
    <div class="card card-category border border-light ">
     <i class="fa fa-music fa-4x d-flex justify-content-center" style="color: #F91942" aria-hidden="true"></i>
		<p class="font-weight-light text-center">Events</p>
	    </div>
    </div>

    
    </div>
    <div class="col-md-3 ">
    <div class="single-card  ">
    <div class="card card-category border border-light ">
    <i class="fa fa-glass fa-4x d-flex justify-content-center" style="color: #F91942" aria-hidden="true"></i>
		<p class="font-weight-light text-center">Nightlife</p>
	    </div>
    </div>
    
    </div>
</div>
            </div>
            <div class="col-md-3 partition"></div>
           
                </div>
            
   
</div>
    
    </div>
 
    </div>

</div>




</div>
</div>
<div class="container-fluid">
<div class="row">
    
<div class="popular">
    <h2 class="text-center"> Popular Locations</h2>
    <div class="col-md-12 popular-loc">
    <div class="row listing-list">

    <div class="col-md-3 ">
    <div class="single-card float-left col-md-6">
    <div class="card-pop ">
     
      <img src="images/maldives.jpg" class="img-fluid rounded" alt="house">
      
    </div>
    </div>

    <div class="card-desc float-right col-md-6">
    <h5 class="font-weight-light">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
       
        </div>
    </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
        <div class="card-pop">
            <img src="images/junction.jpg" class="img-fluid rounded" alt="house">
      
        </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">NAIROBI</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
    </div>
   
        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
        <div class="card-pop">        
        <img src="images/sunrise.jpg" class="img-fluid rounded" alt="house">
             </div>
    </div>
    <div class="card-desc float-right col-md-6">
    <h5 class="font-weight-light">KAKAMEGA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
    </div>
        </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
       <div class="card-pop" >
            <img src="images/sea.jpg" class="img-fluid rounded" alt="house">
           
        </div>
            </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="font-weight-light">KISII</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
               
            </div>
            </div>
            </div>
            <div class="row listing-list">
            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card-pop">
              <img src="images/camel.jpg" class="img-fluid rounded" alt="house">
            
            </div>
        </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="font-weight-light">MANDERA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
            </div>
                </div>

        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
            <div class="card-pop" >
              <img src="images/market.jpg" class="img-fluid rounded" alt="house">
           
            </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">KISUMU</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>
        
            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card-pop" >
              <img src="images/pink-flamingo.jpg" class="img-fluid rounded" alt="house">
            
                    </div>
                </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="font-weight-light">NAKURU</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>
        <div class="col md-3">
        <div class="single-card float-left col-md-6">
            <div class="card-pop" >
            <img src="images/flower.jpg" class="img-fluid rounded" alt="house">
           
            </div>
            </div>
            <div class="card-desc pull-right col-md-6"> 
            <h5 class="font-weight-light">TAVETA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
                </div>
                </div>
                </div>
            
   

    
    </div>
 
    </div>

</div>
</div>
</div>

<div class="container-fluid text-center my-3">
    <h2>Most Visited Venues</h2>
    <!-- <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner " role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/new-zealand.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/location.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/landscape.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/chairs.jpg">
                        </div>
                    </div>
                </div>
                 <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/agriculture.jpg">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="images/rockymountains.jpg">
                        </div>
                    </div>
                </div> 
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="popular-vendors">
                <!-- <h2 class="text-center"> Meet Our Vendors</h2> -->
            <div class="col-md-12 popular-loc">
                <div class="row listing-list">
            
                    <div class="col-md-3">
                        <div class="card-vendor"  >
                            <img src="images/rockymountains.jpg" class="img-fluid rounded" alt="house">
                                <h5 class="card-title">Baked Pizzeria</h5>
            </div>
            
            </div>
            

            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/agriculture.jpg" class="img-fluid rounded" alt="caterers">
           <h5 class="card-title">Val</h5>
            </div>
             
            </div>
            
            
            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/landscape.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Rose and Sons</h5>
            </div>
             
            </div>
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/new-zealand.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Hotel Governdor</h5>
            </div>
              
            </div>
            </div>
            
       

            
            </div>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="popular-vendors">
                <h2 class="text-center"> Meet Our Vendors</h2>
            <div class="col-md-12 popular-loc">
                <div class="row listing-list">
            
                    <div class="col-md-3">
                        <div class="card-vendor"  >
                            <img src="images/photographs.jpg" class="img-fluid rounded" alt="house">
                                <h5 class="card-title">Photography</h5>
            </div>
            
            </div>
            

            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/food.jpg" class="img-fluid rounded" alt="caterers">
           <h5 class="card-title">Caterers</h5>
            </div>
             
            </div>
            
            
            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/table.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">DJs and Music</h5>
            </div>
             
            </div>
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/makeup.jpg" class="img-fluid rounded" alt="house">
            <h5 class="card-title">Make-up Artists</h5>
            </div>
              
            </div>
            </div>
            
       

            
            </div>
            <div class="col-md-8">
                <div id="homemap" style="width: 100%; height: 50px; border-radius: 5px"></div>
            </div>
            </div>

        

        </div>
       