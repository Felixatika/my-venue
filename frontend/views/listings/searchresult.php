<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Location;


    $this->title='Search Results';
    $markers=Location::find()->innerJoinWith('listings')->asArray()->all();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<div class=" container listing-index">
    <!-- <div class="row">
        <div class="container float-right">
            <div class="d-flex justify-content-center">
            <ol class="nav-two">
				<li><button>Location<br>Where are you going?</button></li>
				<li><button>Check in<br>Add dates</button></li>
				<li><button>Check Out<br>Add dates</button></li>
				<li><button>Guests<br>Add guests</button></li>
				<li><button id="search-button"><i class="fa fa-search" style="color: white; font-size: 2em"></i></button></li>
			</ol>
            </div>
        </div>
    </div> -->
        <!-- map and listings go here -->
    <div class="row">
        <div class=" col-md-5 card-row">
            <div class="card-row-i">
            <div class="d-flex justify-content-center">
            <ol class="nav-two">
				<li><button>Location</button></li>
				<li><button>Check in</button></li>
				<li><button>Check Out</button></li>
				<li><button>Guests</button></li>
				<li><button id="search-button"><i class="fa fa-search" style="color: white; font-size: 2em"></i></button></li>
			</ol>
            </div>
                <div><p>(20+) Search results in Kiambu</p></div>
                <div class="filters">
                    <div id="filter-icon"><span style="font-size: 2em; color: Tomato; padding:1em;"><i class="fas fa-filter"></i></span></div>
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Occasion</button>
                        <div class="dropdown-menu">
                            <div class="form-check">
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Weddings</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Baby Showers</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Graduation</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Photoshoot</label></div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group-prepend">
                        <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price</button>
                        <div class="dropdown-menu">
                        <form>
                         <div class="form-group">
                             <label for="formControlRange">Price range</label>
                            <input type="range" class="form-control-range" id="formControlRange" min="1" max="10000">
                            <p>KSH: <span id="priceSlider"></span></p>
                         </div>
                        </form>
                        </div>
                    </div>
                    
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</button>
                        <div class="dropdown-menu">
                            <div class="form-check">
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Tents</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Pool</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> WIFI</label></div>
                                <div><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> Parking</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-row-ii">
                <div class="row-listing-list-sb">
                    <div class="col-md-6 single-listing">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../css/images/wine.jpg" alt="baked pizzeria"><br> 
                            </div>
                        </div>
                        <div class="listing-info">
                            <div>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <p>&#9733 &#9734 &#9734 &#9734 &#9734</p>
                                <a href="#" class="card-link">Ksh.1000</a> 
                            </div>
                            <div class="listing-info-extra">
                                <span class="float-right like-icon">
                                <i class="fas fa-heart" style="color:tomato;"></i>
                                </span>     
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-6 single-listing">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../css/images/wine.jpg" alt="baked pizzeria"><br> 
                            </div>
                        </div>
                        <div class="listing-info">
                            <div>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <p>&#9733 &#9734 &#9734 &#9734 &#9734</p>
                                <a href="#" class="card-link">Ksh.1000</a> 
                            </div>
                            <div class="listing-info-extra">
                                <span class="float-right">
                                <i class="far fa-heart"></i>
                                </span>     
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="row-listing-list-sb">
                <div class="col-md-6 single-listing">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../css/images/wine.jpg" alt="baked pizzeria"><br> 
                            </div>
                        </div>
                        <div class="listing-info">
                            <div>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <p>&#9733 &#9734 &#9734 &#9734 &#9734</p>
                                <a href="#" class="card-link">Ksh.1000</a> 
                            </div>
                            <div class="listing-info-extra">
                                <span class="float-right">
                                <i class="far fa-heart"></i>
                                </span>     
                            </div>   
                        </div>
                    </div>
                    <div class="col-md-6 single-listing">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="../css/images/wine.jpg" alt="baked pizzeria"><br> 
                            </div>
                        </div>
                        <div class="listing-info">
                            <div>
                                <h5 class="card-title">Baked Pizzeria</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Weddings</h6>
                                <p>&#9733 &#9734 &#9734 &#9734 &#9734</p>
                                <a href="#" class="card-link">Ksh.1000</a> 
                            </div>
                            <div class="listing-info-extra">
                                <span class="float-right ">
                                <i class="far fa-heart"></i>
                                
                                </span>     
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-7 map-row">   
                <div id="search-results-map"></div> 
        </div>    
    </div>
</div>

<script type="text/javascript">

      // Initialize and add the map
      function initMap() {
        // The location of Nairobi
        const nairobi = { lat: -1.286389, lng: 36.817223 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("search-results-map"), {
          zoom: 7,
          center: nairobi,
        });

        // Put a marker foreach listing
        var markers = <?php echo json_encode($markers)?>;
        markers.forEach(putMarkers);
       
        function putMarkers(item) {
        
            const contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">'+item.listing.listingName+'</h1>' +
                '<div id="bodyContent">' +
                "<p>"+item.listing.listingDesc+"</p>" +
                '<p>If you want to lern more About: '+item.listing.listingName+' visit, <a href="'+item.listing.videoUrl+'">' +
                ""+item.listing.listingName+"</a> " +
                "(Date Posted: "+item.listing.createdAt+").</p>" +
                "</div>" +
                "</div>";
            
              const infowindow = new google.maps.InfoWindow({
                content: contentString,
              });
        console.log(item);
             var  lat = parseFloat(item.lattitude);
             var  lng = parseFloat(item.longitude);
            const marker = new google.maps.Marker({
              position: { lat: lat, lng: lng },
              map: map,
              title: item.listing.listingName+" ("+item.city+")",
            });
            
          marker.addListener("click", () => {
            infowindow.open(map, marker);
          });
        }
      }

    //   price range slider
         var slider = document.getElementById("formControlRange");
        var output = document.getElementById("priceSlider");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
}
       
</script>

