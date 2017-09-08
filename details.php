<?php 
	$page_header = 'Home';
	include_once('header.php');
	$str = file_get_contents('data.json');
	$json = json_decode($str, true);
	if($_GET['id']){
		$data = $json[$_GET['id']];
	}else{
		$data = $json[1];
	}
?>
<style type="text/css">
	.nopadding {
	   padding: 0 !important;
	   margin:0;
	}
</style>
<!-- LISTINGS DETAILS IMAGE SECTION -->
<section class="clearfix paddingAdjustTopBottom hidden-xs" style="padding:0px;">
	<ul class="list-inline listingImage">
		<li><img src="img/listing/listing-details-1.jpg" alt="Image Listing" class="img-responsive"></li>
		<li><img src="img/listing/listing-details-2.jpg" alt="Image Listing" class="img-responsive"></li>
		<li><img src="img/listing/listing-details-3.jpg" alt="Image Listing" class="img-responsive"></li>
		<li><img src="img/listing/listing-details-4.jpg" alt="Image Listing" class="img-responsive"></li>
	</ul>
</section>
<div class="slicker visible-xs">
	<div><img src="img/listing/listing-details-1.jpg" alt="Image Listing" class="img-responsive"></div>
	<div><img src="img/listing/listing-details-2.jpg" alt="Image Listing" class="img-responsive"></div>
	<div><img src="img/listing/listing-details-3.jpg" alt="Image Listing" class="img-responsive"></div>
	<div><img src="img/listing/listing-details-4.jpg" alt="Image Listing" class="img-responsive"></div>
</div>

<!-- LISTINGS DETAILS TITLE SECTION -->
<section class="clearfix paddingAdjustBottom" style="padding:30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-8 col-md-12">
				<div class="listingTitleArea">
					<h2><?=$data['title'];?></h2>
					<p><?=$data['address'];?><br><?=$data['location'];?></p>
					<div class="listingReview">
						<ul class="list-inline rating">
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
						</ul>
						<span>( 5 Reviews )</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-lg-4 col-md-12">
				<div class="listSidebar">
					<h3><strong>RM<?=$data['price'];?></strong> per day</h3>
					<form action="payment.php" method="post">
						<div class="form-group col-xs-12 col-lg-6 nopadding">
							<div class="dateSelect">
								<label for="starting_day">Starting Day</label>
								<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
								    <input type="text" class="form-control" id="starting_day" placeholder="mm/dd/yyyy">
									<div class="input-group-addon" style="padding: 0 5px 0 0;">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group col-xs-12 col-lg-6 nopadding">
							<div class="dateSelect">
								<label for="starting_day">Ending Day</label>
								<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
								    <input type="text" class="form-control" id="starting_day" placeholder="mm/dd/yyyy">
									<div class="input-group-addon" style="padding: 0 5px 0 0;">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group col-xs-12 nopadding">
							<label>Car Plate</label>
							<input type="text" class="form-control" name="car_plate">
						</div>
						<button href="listing-details-left.html#" class="btn btn-primary" style="padding-left: 5px;padding-right:5px;margin-top: 15px;width: 100%;">Request to Book</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- LISTINGS DETAILS INFO SECTION -->
<section class="clearfix paddingAdjustTop">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<div class="listDetailsInfo">
					<!-- <div class="detailsInfoBox">
						<h3>About This Listing</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
						<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est. </p>
						<p>Qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
					</div> -->
					<div class="detailsInfoBox">
						<h3>Parking Spot Type</h3>
						<ul class="list-inline featuresItems">
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i> <?=$data['features'];?></li>
							<!-- <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Street Parking</li>
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Alcohol</li>
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Vegetarian</li>
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Reservations</li>
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Pets Friendly</li>
							<li><i class="fa fa-check-circle-o" aria-hidden="true"></i>  Accept Credit Card</li> -->
						</ul>
					</div>
					<div class="detailsInfoBox">
						<h3>Reviews (3)</h3>
						<div class="media media-comment">
							<div class="media-left">
							<img src="img/listing/list-user-1.jpg" class="media-object img-circle" alt="Image User">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Jessica Brown</h4>
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan
								totam rem ape riam,</p>
							</div>
						</div>
						<div class="media media-comment">
							<div class="media-left">
							<img src="img/listing/list-user-2.jpg" class="media-object img-circle" alt="Image User">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Jessica Brown</h4>
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan
								totam rem ape riam,</p>
							</div>
						</div>
						<div class="media media-comment">
							<div class="media-left">
							<img src="img/listing/list-user-3.jpg" class="media-object img-circle" alt="Image User">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Jessica Brown</h4>
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan
								totam rem ape riam,</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="listSidebar">
					<h3>Opening Hours</h3>
					<ul class="list-unstyled sidebarList">
						<li>
							<span class="pull-left">Monday</span>
							<span class="pull-right">08.00am - 05.00pm</span>
						</li>
						<li>
							<span class="pull-left">Tuesday</span>
							<span class="pull-right">08.00am - 05.00pm</span>
						</li>
						<li>
							<span class="pull-left">Wednesday</span>
							<span class="pull-right">08.00am - 05.00pm</span>
						</li>
						<li>
							<span class="pull-left">Thrusday</span>
							<span class="pull-right">08.00am - 05.00pm</span>
						</li>
						<li>
							<span class="pull-left">Friday</span>
							<span class="pull-right">08.00am - 05.00pm</span>
						</li>
						<li>
							<span class="pull-left">Saturday</span>
							<span class="pull-right"><a href="listing-details-left.html#">Closed</a></span>
						</li>
						<li>
							<span class="pull-left">Sunday</span>
							<span class="pull-right"><a href="listing-details-left.html#">Closed</a></span>
						</li>
					</ul>
				</div>
				<!-- <div class="clearfix map-sidebar map-right">
					<div id="map" style="position:relative; margin: 0;padding: 0;height: 538px; max-width: none;"></div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.slicker').slick({dots: true,mobileFirst:true});
	});
	</script>
<?php
	include_once('footer.php');
?>
