<?php 
	$page_header = 'Home';
	include_once('header.php');
?>
<style type="text/css">
	.vcenter {
	   display: inline-block;
	   vertical-align: middle;
	   float: none;
	}
	.section-center__full {
	  height: 100vh;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	}
</style>
<!-- MAP SECTION -->
<section class="clearfix p0">
	<div style="background-image: url(img/hero.jpg);width:100%;height: 700px;background-position: center center;background-repeat: no-repeat;">
	    <div class="section-center__full hidden-xs">
	    	<div class="page-header" style="text-align: center;">
			    <h1 style="color:white !important;font-size: 85px;font-family: 'Cuprum', sans-serif;font-weight: normal;padding: 0px 10px;border: 2px solid white;">PARKING MADE EASY</h1>
			    	<div style="clear:both;"></div>
			    <h2 style="color:white !important;">Need parking? Find it here!</h2>
	    	</div>
	    </div>
	    <div class="visible-xs">
	    	<div class="page-header" style="text-align: center;padding-top:92px;">
			    <h1 style="color:white !important;font-size: 40px;font-family: 'Cuprum', sans-serif;font-weight: normal;padding: 0px 10px;border: 2px solid white;width: 338px;margin: 0 auto;">PARKING MADE EASY</h1><br>
			    	<div style="clear:both;"></div>
			    <h2 style="color:white !important;    font-size: 20px;">Need parking? We supply it!</h2>
		    </div>
	    </div>
	</div>
</section>
<!-- CATEGORY SECTION -->
<section class="clearfix bg-light">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 ">
	      <div class="bg-search-white col-xs-12">
	        <form class="form-inline" action="search.php" method="get">
	          <div class="form-group col-xs-12 col-lg-9">
	            <input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="Enter a location" value="kelana jaya lrt">
	          </div>
	          <div class="form-group col-xs-12 col-lg-3">
	            <button type="submit" class="btn btn-primary">Search </button>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- How It Works -->
	<div class="page-header text-center" id="how-it-works">
		<h2>How It Works?</h2>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="howItWorks">
				<div class="howWorksImage text-center"><img src="img/works/works-big-1.png" class="img-fluid" style="max-width: 100%; height: auto;" alt="Image Works"></div>
					<div class="howWorksInfo text-center">
						<p>Step 1</p>
						<h3>Find A Parking Spot</h3>
						<p>Enter a location and search</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="howItWorks">
				<div class="howWorksImage text-center"><img src="img/works/works-big-2.png" class="img-fluid" style="max-width: 100%; height: auto;" alt="Image Works"></div>
					<div class="howWorksInfo text-center">
						<p>Step 2</p>
						<h3>Pick Your Sweet Spot</h3>
						<p>Look around on our handy map and check out <br> the available listings</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="howItWorks">
				<div class="howWorksImage text-center"><img src="img/works/works-big-3.png" class="img-fluid" style="max-width: 100%; height: auto;" alt="Image Works"></div>
					<div class="howWorksInfo text-center">
						<p>Step 3</p>
						<h3>‘Chop’ the Spot!</h3>
						<p>Proceed to ‘Book Now’ and pay online. It’s as easy as 123!</p>
				</div>
			</div>
		</div>
		</div>
	</div>


	
		<!-- <div class="page-header text-center">
			<h2>Browse by Categories <small>Explore and connect with great local businesses </small></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-car-1"></i>
					<h2>Cars & Vehicles</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Bikes & Scooters</a></li>
						<li><a href="category-list-left.html">Commercial Vehicles</a></li>
						<li><a href="category-grid.html">Bicycles Spare Parts</a></li>
						<li><a href="category-list-right.html">Accessories</a></li>
						<li><a href="category-grid-right.html">Other Vehicles</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-mobile-phone"></i>
					<h2>Electronics & Gedgets</h2>
					<ul class="list-unstyled">
						<li><a href="category-list-full.html">Mobile Phones</a></li>
						<li><a href="category-list-left.html">Computers & Tablets</a></li>
						<li><a href="category-list-right.html">Computer Accessories</a></li>
						<li><a href="category-grid.html">Cameras & Camcorders</a></li>
						<li><a href="category-list-full.html">Mobile Phone Accessories</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-neighborhood"></i>
					<h2>Real Estate</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Apartments & Flats</a></li>
						<li><a href="category-list-left.html">Plots & Land</a></li>
						<li><a href="category-grid-right.html">Rooms</a></li>
						<li><a href="category-grid-full.html">Accessories</a></li>
						<li><a href="category-list-left.html">Houses</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-coat-1"></i>
					<h2>Fshion & Beauty</h2>
					<ul class="list-unstyled">
						<li><a href="category-list-full.html">Clothing</a></li>
						<li><a href="category-list-left.html">Watches</a></li>
						<li><a href="category-list-right.html">Health & Beauty Products</a></li>
						<li><a href="category-list-left.html">Jewellery</a></li>
						<li><a href="category-list-full.html">Bags</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->
</section>
<?php
	include_once('footer.php');
?>
