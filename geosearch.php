<?php 

include_once('header.php');


 ?>

    <style>
      #map {
        height: 500px;
        width: 100%;
       }
    </style>
  
    <div id="map"></div>
   


<?php 


include_once('footer.php');
 ?>

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
      	var popupcontent = '<div id="marker" class="flip-container"> <div class="marker-verified"><i class="fa fa-check"></i></div> <div class="flipper">' + '<div class="front">' + '<img src="https://upload.wikimedia.org/wikipedia/commons/5/5b/174-free-google-maps-pointer.png">' + '</div>' + '<div class="back">' + '<i class="fa fa-eye"></i>' + '</div>' + '</div>' + '</div>';
      	
      	var oc_content1 = "Hello World";





      	var locations = [
		      ['Park Spot 1', 3.055148, 101.583127, 1],
		      ['Park Spot 2', 3.052784, 101.585726, 2],
		      ['Park Spot 3', 3.058614, 101.587765, 3],
		      ['Park Spot 4', 3.060628, 101.583988, 4],
		      ['Park Spot 5', 3.057607, 101.579761, 5]
		    ];

        var subang = {lat: 3.0567, lng: 101.5851};

        


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
	                    content: popupcontent
	                });
	                infowindow.open(map, marker);
	            });
	        })(marker, i);
	      }

        var marker1 = new RichMarker({
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
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4&callback=initMap">
    </script>
