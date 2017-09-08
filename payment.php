<?php
	$page_header = 'Payment';
	include_once('header.php');
?>
<!-- PROCESS SECTION -->
<section class="clearfix processSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="processArea">
					<ul class="list-inline">
						<li>
							<h2>Billing Information</h2>
							<form class="loginForm">
								<div class="form-group">
									<input type="text" class="form-control" id="cardHOlderName" placeholder="Cardholder Name">
								</div>
								<div class="form-group">
									<i class="fa fa-credit-card" aria-hidden="true"></i>
									<input type="text" class="form-control" id="cardNumber" placeholder="Card Number">
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="dateSelect">
											<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
												<input type="text" class="form-control" placeholder="mm/dd/yyyy">
												<div class="input-group-addon">
													<i class="fa fa-calendar" aria-hidden="true"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
											<i class="fa fa-question-circle-o" aria-hidden="true"></i>
											<input type="text" class="form-control" id="cvc" placeholder="CVC">
										</div>
									</div>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> By confirming you agree to our <a href="terms-of-services.html">Terms of Service</a>
									</label>
								</div>
								<div class="form-group mgnBtm0">
									<button type="submit" class="btn btn-primary">Confirm Purchase</button>
								</div>
								<div class="formSection">
									<div class="cardBox">
										<div class="paymentMethod">
											<img src="img/business/paypal.png" alt="Image paypal">
										</div>
										<ul class="list-inline">
											<li style="width:80px;padding: 0 5px;"><img src="img/business/visa.jpg" alt="Image card"></li>
											<li style="width:80px;padding: 0 5px;"><img src="img/business/master-card.jpg" alt="Image card"></li>
											<li style="width:80px;padding: 0 5px;"><img src="img/business/american-express.jpg" alt="Image card"></li>
											<li style="width:80px;padding: 0 5px;"><img src="img/business/discover.jpg" alt="Image card"></li>
										</ul>
									</div>
								</div>
							</form>
						</li>
						<li >
							<h2>Order Summary</h2>
							<h3 style="text-transform: none !important;">Venue : </h3>
							<h3 style="text-transform: none !important;">Car Plate : </h3>
							<h3 style="text-transform: none !important;">Date : </h3>
							<h3 style="text-transform: none !important;">Total : </h3>
							<p>$1550.00</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include_once('footer.php');
?>