<?php 
	$page_header = 'Home';
	include_once('header.php');
?>
<!-- MAP SECTION -->
<section class="clearfix p0">
	<!-- <div id="map-canvas"></div> -->
	<div style="background-image: url(img/hero.jpg);width:1350px;height: 700px;"></div>
</section>
<!-- CATEGORY SECTION -->
<section class="clearfix bg-light">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 ">
	      <div class="bg-search-white">
	        <form class="form-inline" action="category-grid.html" method="">
	          <div class="form-group">
	            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your keywords">
	          </div>
	          <div class="form-group">
	            <div class="searchSelectbox">
	              <select name="guiest_id3" id="guiest_id3" class="select-drop">
	                <option value="0">All Location</option>
	                <option value="1">U.S.A</option>
	                <option value="2">U.K</option>
	                <option value="3">ASIA</option>
	              </select>
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="searchSelectbox">
	              <select name="guiest_id4" id="guiest_id4" class="select-drop">
	                <option value="0">All Categories</option>
	                <option value="1">All Categories 1</option>
	                <option value="2">All Categories 2</option>
	                <option value="3">All Categories 3</option>
	              </select>
	            </div>
	          </div>
	          <div class="form-group">
	            <button type="submit" class="btn btn-primary">Search </button>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="container">
		<div class="page-header text-center">
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
	</div>
</section>
<?php
	include_once('footer.php');
?>
