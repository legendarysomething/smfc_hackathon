<?php 
$page_header = "Quick Search";
include_once('header.php');


 ?>

    <style>
      #map {
        height: 500px;
        width: 100%;
       }


    </style>
  
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-sm-6 col-xs-12">
  				<br><h3>Maps</h3>
				<div id="map"></div>
  			</div>

			<!-- Content Start -->
  			<div class="col-sm-3 col-xs-12">
				<br>
				<h3>Spots Avaliable Nearby</h3>
	  			<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>Shaded parking spot in KJ <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Taman Mayang, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Sam K.</a></li>
						</ul>
					</div>
				</div>
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-half-empty" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>Gated & shaded parking <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Taman Mayang, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Su-Meng Y.</a></li>
						</ul>
					</div>
				</div>
  			</div>
  			<div class="col-sm-3 col-xs-12">
				<br>
				<h3>&nbsp;</h3>
	  			<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>Car porch parking <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Taman Mayang, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Jih Chuan L.</a></li>
						</ul>
					</div>
				</div>
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-half-empty" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>2 spot parking in Kelana <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Taman Mayang, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Novi K.</a></li>
						</ul>
					</div>
				</div>
				

  			</div>
			<!-- content end -->



  		</div>
  	</div>
    
   


	 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script>


      function initMap() {


      	var styledMapType = new google.maps.StyledMapType(
            [{
			    "featureType": "administrative",
			    "elementType": "labels.text.fill",
			    "stylers": [{	
			        "color": "#444444"
			    }]
			}, {
			    "featureType": "landscape",
			    "elementType": "all",
			    "stylers": [{
			        "color": "#f2f2f2"
			    }]
			}, {
			    "featureType": "poi",
			    "elementType": "all",
			    "stylers": [{
			        "visibility": "off"
			    }]
			}, {
			    "featureType": "road",
			    "elementType": "all",
			    "stylers": [{
			        "saturation": -100
			    }, {
			        "lightness": 45
			    }]
			}, {
			    "featureType": "road.highway",
			    "elementType": "all",
			    "stylers": [{
			        "visibility": "simplified"
			    }]
			}, {
			    "featureType": "road.arterial",
			    "elementType": "labels.icon",
			    "stylers": [{
			        "visibility": "off"
			    }]
			}, {
			    "featureType": "transit",
			    "elementType": "all",
			    "stylers": [{
			        "visibility": "off"
			    }]
			}, {
			    "featureType": "water",
			    "elementType": "all",
			    "stylers": [{
			        "color": "#46bcec"
			    }, {
			        "visibility": "on"
			    }]
			}, {
			    "featureType": "water",
			    "elementType": "geometry.fill",
			    "stylers": [{
			        "color": "#2196f3"
			    }]
			}],
            {name: 'Styled Map'});

      	// Content for onclick
      	var popupcontent = '<div class="infobox-close"><i class="fa fa-close"></i></div>' + '<div id="iw-container" style="background-image: url(\"img/listing/listing1\");">' + '<div class="iw-content">' + '<ul class="list-inline rating">' + '<li><i class="fa fa-star" aria-hidden="true"></i></li>' + '<li><i class="fa fa-star" aria-hidden="true"></i></li>' + '<li><i class="fa fa-star" aria-hidden="true"></i></li>' + '<li><i class="fa fa-star" aria-hidden="true"></i></li>' + '<li><i class="fa fa-star" aria-hidden="true"></i></li>' + '</ul>' + '<div class="iw-subTitle">Title</div>' + '<p>address</p>' + '</div>' + '<div class="iw-bottom-gradient"></div>' + '</div>';

      	
      	var oc_content1 = "Hello World";





      	var locations = [
		      ['Park Spot 1', 3.113902, 101.604686, 1],
		      ['Park Spot 2', 3.111301, 101.604076, 2],
		      ['Park Spot 3', 3.113706, 101.608417, 3],
		      ['Park Spot 4', 3.114803, 101.603876, 4],
		      ['Park Spot 5', 3.110667, 101.602123, 5],
		      ['Park Spot 6', 3.107341, 101.601948, 6],
		      ['Park Spot 7', 3.108250, 101.605663, 7],
		      ['Park Spot 8', 3.110857, 101.608510, 8],
		      ['Park Spot 9', 3.119435, 101.611363, 9],
		      ['Park Spot 10', 3.116634, 101.600531, 10]
		    ];

        var subang = {lat: 3.1124459, lng: 101.6044029};

        


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: subang,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        console.log(locations);
        for (i = 0; i < locations.length; i++) {  
	      	marker = new google.maps.Marker({
		        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        map: map, 
		        icon: "img/parking.png",
		        title: "Click for more info"

		    });

		    (function(marker, i) {
	            // add click event
	            google.maps.event.addListener(marker, 'click', function() {
	                infowindow = new google.maps.InfoWindow({
	                    content: oc_content1
	                });
	                infowindow.open(map, marker);
	            });
	        })(marker, i);
	      }

        var marker1 = new Marker({
          position: subang,
          map: map
        });

        

        // marker.addListener('click', function() {
        //   infowindow.open(map, marker);
        //   alert('test');
        // });



        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

       
  	}

    </script>



<?php 


include_once('footer.php');
 ?>