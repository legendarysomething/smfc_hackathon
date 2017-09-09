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
  			<div class="col-sm-8 col-xs-12">
  				<br><h3>Quick Search</h3>
				<div id="map"></div><br>
  			</div>

			<!-- Content Start -->
  			<div class="col-sm-4 col-xs-12">
				<br>
				<h3>Spots Avaliable Nearby</h3>
	  			<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing9.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="details.php?id=9"><h2>Outside spacious parking <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Setia Eco-Park, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li>Sam K.</li>
							<br>
						</ul>
					</div>
				</div>
  			
	  			<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/listing/listing10.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
							<a href="details.php?id=10"><h2>Gated & shaded parking<i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>Setia Eco-Park, Selangor, Malaysia</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li>Jih Chuan L.</li>
							<br>
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
      	var popupcontent = `
      	<div class="infobox-close">
      		<i class="fa fa-close"></i>
      	</div>
      	<div id="iw-container" style="background-image: url({url});">
      		<div class="iw-content">
      			<ul class="list-inline rating">
      				<li><i class="fa fa-star" aria-hidden="true"></i></li>
      				<li><i class="fa fa-star" aria-hidden="true"></i></li>
      				<li><i class="fa fa-star" aria-hidden="true"></i></li>
      				<li><i class="fa fa-star" aria-hidden="true"></i></li>
      				<li><i class="fa fa-star" aria-hidden="true"></i></li>
  				</ul>
  				<div class="iw-subTitle">{desc}</div>
  					<a href="details.php?{id}" class="btn btn-primary">&nbsp; Get Details &nbsp;</a>
				</div>
				<div class="iw-bottom-gradient"></div>
			</div>
		</div>`;

		// img/listing/listing1.jpg
		// id=1
      	var oc_content = []
      	oc_content[0] = popupcontent.replace("{url}", "img/listing/listing9.jpg");
      	oc_content[0] = oc_content[0].replace("{id}", "id=9");
      	oc_content[0] = oc_content[0].replace("{desc}", "Outside spacious parking");

      	oc_content[1] = popupcontent.replace("{url}", "img/listing/listing10.jpg");
      	oc_content[1] = oc_content[1].replace("{id}", "id=10");
      	oc_content[1] = oc_content[1].replace("{desc}", "Gated & shaded parking");





      	var locations = [
		      ['Park Spot 1', 3.108435, 101.471407, 1],
		      ['Park Spot 2', 3.106538, 101.471054, 2],
		    ];

        var subang = {lat: 3.1097854, lng: 101.4611163};

        


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
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
	                    content: oc_content[i]
	                });
	                infowindow.open(map, marker);
	            });
	        })(marker, i);
	      }

        marker = new google.maps.Marker({
		        position: new google.maps.LatLng(3.1097854, 101.4611163),
		        map: map, 
		        // icon: "img/parking.png",
		        title: "You Are Here"

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