<?php 
$page_header = "Search Page";
include_once('header.php');
 ?>


<!-- CATEGORY SEARCH SECTION -->
<section class="clearfix searchArea banerInfo searchAreaGray">
	<form>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">Find</div>
							<input type="text" class="form-control" id="findItem" placeholder="What are you looking for?">
							<div class="input-group-addon addon-right"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">Near</div>
							<input type="text" class="form-control" id="nearLocation" placeholder="Location">
							<div class="input-group-addon addon-right"><i class="icon-listy icon-target" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="searchPart">
						<div class="searchPartInner">
							<div class="searchPartTitle">Category</div>
							<div class="searchSelectboxes">
								<select name="guiest_id32" id="guiest_id32" class="select-drop">
									<option value="0">All Categories</option>
									<option value="1">All Categories 1</option>
									<option value="2">All Categories 2</option>
									<option value="3">All Categories 3</option>            
								</select>
							</div>
						</div>
					</div>
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
					<h2>We found <span>8</span> Results for you</h2>
					<!-- <ul class="list-inline">
						<li><a href="listing-sidebar-map-full.html"><i class="fa fa-th" aria-hidden="true"></i></a></li>
						<li class="active"><a href="listing-sidebar-map-right.html"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
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
								<h2><a href="blog-details.html" style="color: #222222">Shaded parking spot in KJ</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>15 Jalan SS 25/4 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>

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
								<h2><a href="blog-details.html" style="color: #222222">Gated & shaded parking</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>42 Jalan SS 4c/4 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">Car porch parking</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>32 Jalan SS 24/3 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">2 spot parking in Kelana</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>46 Jalan SS 25/10 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">Kelana Jaya parking (outside)</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>2 Jalan SS 4c/18 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">1 Spot Outside Parking in Kelana</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>20 Jalan SS 4b/18 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">Shaded 1 spot parking</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>5 Jalan SS 4b/1 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
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
								<h2><a href="blog-details.html" style="color: #222222">Shaded Porch Parking</a> <span class="likeCount"><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</span></h2>
								<p>55 Jalan SS 4/10 <span class="placeName">Kelana Jaya</span></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. </p>
								<p>Owner : Sam K. <br> Avaliability : Every Weekday 8am to 7pm</p>
							</div>
						</div>
					</div>
				</div>
				<div class="paginationCommon blogPagination categoryPagination">
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
				</div>
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
		      // ['Park Spot 9', 3.119435, 101.611363, 9],
		      // ['Park Spot 10', 3.116634, 101.600531, 10]
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