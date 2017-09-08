<?php 
$page_header = "Search Page";
include_once('header.php');


//https://maps.googleapis.com/maps/api/geocode/json?address=kelana+jaya+lrt&key=AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4


if (isset($_GET['location']))
{
	// $api_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$_GET['location']."&key=AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4";
	$query = http_build_query(array('address'=>$_GET['location'], 'key'=>'AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4'));
	$api_url = "https://maps.googleapis.com/maps/api/geocode/json?" . $query;
	$json = file_get_contents($api_url);
	$obj = json_decode($json);


	$lat = $obj->results[0]->geometry->location->lat;
	$lng = $obj->results[0]->geometry->location->lng;

} 

// Default to lrt kelana jaya line for hackathon demo
else
{
	$lat = 3.1124459;
	$lng = 101.6044029;
}

if (isset($_GET['location']) && $_GET['location'] != "kelana jaya lrt")
{
	$disabled = 1;
}
else
{
	$disabled = 0;
}


 ?>


<!-- <div class="infobox-close"><i class="fa fa-close"></i></div><div id="iw-container" style="background-image: url(img\\listing\\listing1.jpg);"><div class="iw-content"><ul class="list-inline rating"><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li><li><i class="fa fa-star" aria-hidden="true"></i></li></ul><div class="iw-subTitle">Title</div><p>address</p></div><div class="iw-bottom-gradient"></div></div> -->

<!-- CATEGORY SEARCH SECTION -->
<section class="clearfix searchArea banerInfo searchAreaGray">
	<form>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<form class="form-inline" action="search.php" method="get">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="Enter a location">
								<div class="input-group-addon addon-right"></div>
								<span class="input-group-btn">
							        <button class="btn btn-primary" type="submit">Go!</button>
							      </span>
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</form>
</section>

<!-- CATEGORY LIST SECTION -->
<section class="clerfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="clearfix map-sidebar map-right map-margin-btm">
					<div id="map"  style="position:relative; margin: 0;padding: 0;height: 538px; max-width: none;"></div>
				</div>
				
			</div>
			<div class="col-sm-8 col-xs-12">
				<div class="resultBar barSpaceAdjust">
					<?php if ($disabled == 0){ ?>
						<h2>We found <span>8</span> Results for you</h2>
					<?php } else { ?>
						<h1>Oh no! We couldn't find any listings in the area</h1>
					<?php } ?>
					<!-- <ul class="list-inline">
						<li><a href="listing-sidebar-map-full.html"><i class="fa fa-th" aria-hidden="true"></i></a></li>
						<li class="active"><a href="listing-sidebar-map-right.html"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
				<?php if ($disabled == 0){ ?>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing1.jpg" alt="Image category" class="img-responsive img-rounded">
								<span class="label label-primary">Verified</span>
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<h2><a href="details.php?id=1" style="color: #222222">Shaded parking spot in KJ</a> 
								<p>15 Jalan SS 25/4 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=1" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>

							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing2.jpg" alt="Image category" class="img-responsive img-rounded">
								<span class="label label-primary">Verified</span>
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<h2><a href="details.php?id=2" style="color: #222222">Gated & shaded parking</a> 
								<p>42 Jalan SS 4c/4 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Su-Meng Y. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=2" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>

							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing3.jpg" alt="Image category" class="img-responsive img-rounded">
								<span class="label label-primary">Verified</span>
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<h2><a href="details.php?id=3" style="color: #222222">Car porch parking</a> 
								<p>32 Jalan SS 24/3 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Jih Chuan L. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=3" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing4.jpg" alt="Image category" class="img-responsive img-rounded">
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<h2><a href="details.php?id=4" style="color: #222222">2 spot parking in Kelana</a> 
								<p>46 Jalan SS 25/10 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Novi K. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=4" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing5.jpg" alt="Image category" class="img-responsive img-rounded">
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<h2><a href="details.php?id=5" style="color: #222222">Kelana Jaya parking (outside)</a> 
								<p>2 Jalan SS 4c/18 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Jaz L. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=5" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing6.png" alt="Image category" class="img-responsive img-rounded">
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<h2><a href="details.php?id=6" style="color: #222222">1 Spot Outside Parking in Kelana</a> 
								<p>20 Jalan SS 4b/18 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Deric C. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=6" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listContent">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing7.jpg" alt="Image category" class="img-responsive img-rounded">
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<h2><a href="details.php?id=7" style="color: #222222">Shaded 1 spot parking</a> 
								<p>5 Jalan SS 4b/1 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Faraq L. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=7" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<div class="listContent borderRemove">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="categoryImage">
								<img src="img/listing/listing8.jpg" alt="Image category" class="img-responsive img-rounded">
							</div>
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="categoryDetails">
								<h2><a href="details.php?id=8" style="color: #222222">Shaded Porch Parking</a> 
								<p>55 Jalan SS 4/10 <span class="placeName">Kelana Jaya</span></p>
								
								<p>Owner : Yohann l. <br> Avaliability : Every Weekday 8am to 7pm</p>

								<a href="details.php?id=8" class="btn btn-primary">&nbsp;&nbsp;Details&nbsp;&nbsp;</a>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
				<!-- <div class="paginationCommon blogPagination categoryPagination">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<a href="listing-sidebar-map-right.html#" aria-label="Previous">
									<span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
								</a>
							</li>
							<li class="active"><a href="listing-sidebar-map-right.html#">1</a></li>
							<li><a href="listing-sidebar-map-right.html#">2</a></li>
							<li><a href="listing-sidebar-map-right.html#">3</a></li>
							<li><a href="listing-sidebar-map-right.html#">4</a></li>
							<li><a href="listing-sidebar-map-right.html#">5</a></li>
							<li>
								<a href="listing-sidebar-map-right.html#" aria-label="Next">
									<span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</a>
							</li>
						</ul>
					</nav>
				</div> -->
			</div>
		</div>
	</div>
</section>





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
      	oc_content[0] = popupcontent.replace("{url}", "img/listing/listing1.jpg");
      	oc_content[0] = oc_content[0].replace("{id}", "id=1");
      	oc_content[0] = oc_content[0].replace("{desc}", "Shaded parking spot in KJ");

      	oc_content[1] = popupcontent.replace("{url}", "img/listing/listing2.jpg");
      	oc_content[1] = oc_content[1].replace("{id}", "id=2");
      	oc_content[1] = oc_content[1].replace("{desc}", "Gated & shaded parking");

      	oc_content[2] = popupcontent.replace("{url}", "img/listing/listing3.jpg");
      	oc_content[2] = oc_content[2].replace("{id}", "id=3");
      	oc_content[2] = oc_content[2].replace("{desc}", "Car porch parking");

      	oc_content[3] = popupcontent.replace("{url}", "img/listing/listing4.jpg");
      	oc_content[3] = oc_content[3].replace("{id}", "id=4");
      	oc_content[3] = oc_content[3].replace("{desc}", "2 spot parking in Kelana");

      	oc_content[4] = popupcontent.replace("{url}", "img/listing/listing5.jpg");
      	oc_content[4] = oc_content[4].replace("{id}", "id=5");
      	oc_content[4] = oc_content[4].replace("{desc}", "Kelana Jaya parking (outside)");
        
        oc_content[5] = popupcontent.replace("{url}", "img/listing/listing6.png");
      	oc_content[5] = oc_content[5].replace("{id}", "id=6");
      	oc_content[5] = oc_content[5].replace("{desc}", "1 Spot Outside Parking in Kelana");

      	oc_content[6] = popupcontent.replace("{url}", "img/listing/listing7.jpg");
      	oc_content[6] = oc_content[6].replace("{id}", "id=7");
      	oc_content[6] = oc_content[6].replace("{desc}", "Shaded 1 spot parking");

      	oc_content[7] = popupcontent.replace("{url}", "img/listing/listing8.jpg");
      	oc_content[7] = oc_content[7].replace("{id}", "id=8");
      	oc_content[7] = oc_content[7].replace("{desc}", "1 Spot Outside Parking In Kelana");


      	console.log(oc_content);



      	var locations = [
		      ['Park Spot 1', 3.113902, 101.604686, 1],
		      ['Park Spot 2', 3.111301, 101.604076, 2],
		      ['Park Spot 3', 3.113706, 101.608417, 3],
		      ['Park Spot 4', 3.114803, 101.603876, 4],
		      ['Park Spot 5', 3.110667, 101.602123, 5],
		      ['Park Spot 6', 3.107341, 101.601948, 6],
		      ['Park Spot 7', 3.108250, 101.605663, 7],
		      ['Park Spot 8', 3.110857, 101.608510, 8],
		      // ['Park Spot 9', 3.119435, 101.611363, 9],
		      // ['Park Spot 10', 3.116634, 101.600531, 10]
		    ];

        var center = {lat: <?=$lat?>, lng: <?=$lng?>};

        


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: center,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });


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
	                    // content: popupcontent
	                });
	                infowindow.open(map, marker);
	            });
	        })(marker, i);
	      }

        marker = new google.maps.Marker({
		        position: new google.maps.LatLng(<?=$lat?>, <?=$lng?>),
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



