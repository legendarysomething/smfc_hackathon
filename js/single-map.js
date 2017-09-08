// $(document).ready(function()
// 	{
// 		'use strict';
// 		var mapStyles=[
// 		// {'elementType':'geometry','stylers':[{'color':'#f5f5f5'}]},
// 		// {'elementType':'labels.icon','stylers':[{'visibility':'off'}]},
// 		// {'elementType':'labels.text.fill','stylers':[{'color':'#616161'}]},
// 		// {'elementType':'labels.text.stroke','stylers':[{'color':'#f5f5f5'}]},
// 		// {'featureType':'administrative.land_parcel','elementType':'labels.text.fill','stylers':[{'color':'#bdbdbd'}]},
// 		// {'featureType':'poi','elementType':'geometry','stylers':[{'color':'#eeeeee'}]},
// 		// {'featureType':'poi','elementType':'labels.text.fill','stylers':[{'color':'#757575'}]},
// 		// {'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#e5e5e5'}]},
// 		// {'featureType':'poi.park','elementType':'labels.text.fill','stylers':[{'color':'#9e9e9e'}]},
// 		// {'featureType':'road','elementType':'geometry','stylers':[{'color':'#ffffff'}]},
// 		// {'featureType':'road.arterial','elementType':'labels.text.fill','stylers':[{'color':'#757575'}]},
// 		// {'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#dadada'}]},
// 		// {'featureType':'road.highway','elementType':'labels.text.fill','stylers':[{'color':'#616161'}]},
// 		// {'featureType':'road.local','elementType':'labels.text.fill','stylers':[{'color':'#9e9e9e'}]},
// 		// {'featureType':'transit.line','elementType':'geometry','stylers':[{'color':'#e5e5e5'}]},
// 		// {'featureType':'transit.station','elementType':'geometry','stylers':[{'color':'#eeeeee'}]},
// 		// {'featureType':'water','elementType':'geometry','stylers':[{'color':'#c9c9c9'}]},
// 		// {'featureType':'water','elementType':'labels.text.fill','stylers':[{'color':'#9e9e9e'}]}];
		

// 		function initMap()
// 		{

// 			var locations = [
// 		      ['Park Spot 1', 3.055148, 101.583127, 1],
// 		      ['Park Spot 2', 3.052784, 101.585726, 2],
// 		      ['Park Spot 3', 3.058614, 101.587765, 3],
// 		      ['Park Spot 4', 3.060628, 101.583988, 4],
// 		      ['Park Spot 5', 3.057607, 101.579761, 5]
// 		    ];

// 	        var subang = {lat: 3.0567, lng: 101.5851};

// 	        // Test info window
// 	        var contentString = "test";
// 	        var infowindow = new google.maps.InfoWindow({
// 	          content: contentString
// 	        });


// 	        var map = new google.maps.Map(document.getElementById('map'), {
// 	          zoom: 15,
// 	          center: subang,
// 	          // styles:mapStyles
// 	        });
// 	        console.log(locations);
// 	        for (i = 0; i < locations.length; i++) {  
// 		      	marker = new google.maps.Marker({
// 			        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
// 			        map: map, 
// 			        icon: "img/parking.png"

// 			    });
// 		      }

// 	        var marker1 = new google.maps.Marker({
// 	          position: subang,
// 	          map: map
// 	        });

// 	        marker1.addListener('click', function() {
// 	          infowindow.open(map, marker);
// 	          alert('test');
// 	        });
// 		}



// 	var id=document.getElementById('map');
// 	if(id)
// 	{
// 		initMap();
// 	}

// });