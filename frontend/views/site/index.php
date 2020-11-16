<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'VENUES';
?>
<div class="site-index">


    <div class="row no-gutters serchbar">
        <div class="col">
            <input class="form-control border-secondary  border-right-0 rounded-0" type="search" value="Search Properties...." id="example-search-input4">
        </div>
        <div class="col-auto">
            <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="explore">
        <h1>Venues</h1>
        <h1>Near Me</h1>
       <p><button type="button" class="btn btn-outline-secondary">Explore Nearby venues</button></p>
    </div>

    
</div><br>
<br>
<br>
<div class="container-fluid">
<div class="row">
    
<div class="popular">
    <h1 class="text-center"> POPULAR LOCATIONS</h1>
    <div class="col-md-12 popular-loc">
    <div class="row listing-list">

    <div class="col-md-3 ">
    <div class="single-card float-left col-md-6">
    <div class="card">
     
      <img src="images/bg.jpg" class="img-fluid" alt="house">
      
    </div>
    </div>

    <div class="card-desc float-right col-md-6">
    <h5 class="card-title">MOMBASAs</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
       
        </div>
    </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
        <div class="card">
            <img src="images/ice-cream.jpg" class="img-fluid" alt="house">
      
        </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
    </div>
   
        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
        <div class="card">        
        <img src="images/bg.jpg" class="img-fluid" alt="house">
             </div>
    </div>
    <div class="card-desc float-right col-md-6">
    <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
    </div>
        </div>
    <div class="col-md-3">
    <div class="single-card float-left col-md-6">
       <div class="card" >
            <img src="images/bg.jpg" class="img-fluid" alt="house">
           
        </div>
            </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
               
            </div>
            </div>
            </div>
            <div class="row listing-list">
            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card">
              <img src="images/bg.jpg" class="img-fluid" alt="house">
            
            </div>
        </div>
            <div class="card-desc float-right col-md-6">
            <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
            </div>
                </div>

        <div class="col-md-3">
        <div class="single-card float-left col-md-6">
            <div class="card" >
              <img src="images/bg.jpg" class="img-fluid" alt="house">
           
            </div>
        </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>
        
            <div class="col-md-3">
            <div class="single-card float-left col-md-6">
            <div class="card" >
              <img src="images/bg.jpg" class="img-fluid" alt="house">
            
                    </div>
                </div>
        <div class="card-desc float-right col-md-6">
        <h5 class="card-title">MOMBASA</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
        </div>
            </div>
        <div class="col md-3">
        <div class="single-card float-left col-md-6">
            <div class="card" >
            <img src="images/bg.jpg" class="img-fluid" alt="house">
           
            </div>
            </div>
            <div class="card-desc pull-right col-md-6"> 
            <h5 class="card-title">MOMBASAr</h5>
        <h6 class="card-subtitle mb-2 text-muted">7 Hr Drive</h6>
                </div>
                </div>
                </div>
            
   

    
    </div>
    <div class="col-md-8">
    	<div id="homemap" style="width: 100%; height: 850px; border-radius: 5px"></div>
    </div>
    </div>

</div>
</div>
yess</div>
 
<div class="container-fluid">
<div class="row">
<div class="popular-ven">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="images/ice-cream.jpg" class="card-img-top" alt="house">
    </div>
    <div class="carousel-item">
    <img src="images/bg.jpg" class="card-img-top" alt="house">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div></div>
</div>

    <div class="container-fluid">
    <div class="row">
    <div class="popular-vendors">
    <h1> Meet Our Vendors</h1>
            <div class="col-md-12 popular-loc">
            <div class="row listing-list">
            
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/bg.jpg" class="card-img-top" alt="house">
          <h5 class="card-title">Photography</h5>
            </div>
            
            </div>
            

            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/bg.jpg" class="img-fluid" alt="house">
           <h5 class="card-title">Caterers</h5>
            </div>
             
            </div>
            
            
            <div class="col-md-3">
            <div class="card-vendor" >
            <img src="images/bg.jpg" class="img-fluid" alt="house">
            <h5 class="card-title">DJs and Music</h5>
            </div>
             
            </div>
            <div class="col-md-3">
            <div class="card-vendor"  >
            <img src="images/bg.jpg" class="img-fluid" alt="house">
            <h5 class="card-title">Make-up Artists</h5>
            </div>
              
            </div>
            </div>
            
       

            
            </div>
            <div class="col-md-8">
                <div id="homemap" style="width: 100%; height: 850px; border-radius: 5px"></div>
            </div>
            </div>

        

        </div>
       