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
									<div class="col-sm-4 col-xs-12">
										<div class="form-group">
											<i class="fa fa-question-circle-o" aria-hidden="true"></i>
											<input type="text" class="form-control" id="month" placeholder="MM">
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
										<div class="form-group">
											<i class="fa fa-question-circle-o" aria-hidden="true"></i>
											<input type="text" class="form-control" id="year" placeholder="YY">
										</div>
									</div>
									<div class="col-sm-4 col-xs-12">
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
							<div>
								<div style="float: left;">
									<h3 style="text-transform: none !important;">Venue : </h3>
								</div>
								<div style="float: right;text-align: right;margin-top: 5px;">
									<span style="font-size: 16px;">SS 25/6 Taman Mayang 47301 PJ Selangor</span>
								</div>
								<div style="clear: both;"></div>
							</div>

							<div>
								<div style="float: left;">
									<h3 style="text-transform: none !important;">Car Plate : </h3>
								</div>
								<div style="float: right;text-align: right;margin-top: 5px;">
									<span style="font-size: 16px;">F2314</span>
								</div>
								<div style="clear: both;"></div>
							</div>

							<div>
								<div style="float: left;">
									<h3 style="text-transform: none !important;">Date : </h3>
								</div>
								<div style="float: right;text-align: right;margin-top: 5px;">
									<span style="font-size: 16px;">Oct 18, 2017 <span class="glyphicon">&#xe092;</span> Oct 19, 2017</span>
								</div>
								<div style="clear: both;"></div>
							</div>

							<div>
								<div style="float: left;">
									<h3 style="text-transform: none !important;">Total : </h3>
								</div>
								<div style="float: right;text-align: right;margin-top: 5px;">
									<span style="font-size: 16px;color:#2196f3;">RM 3</span>
								</div>
								<div style="clear: both;"></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('form').submit(function(evt) {
			evt.preventDefault();
			// var form = this;
			// // format data
			// var data = {};
			// $(form).find('input, select').not('.form-exclude').each(function(index, el) {
			// 	data[$(el).attr('name')] = $(el).val();
			// });
			// // stating env type
			// data['env'] = $('#toggle-text').attr('data-env');
			// console.log("[FORM DATA]");
			// console.log(JSON.stringify(data));
			// // format spinner
			// $(form).find(':submit').button('loading');
			// // fire ajax call in place of form submission
			// $.ajax({
			// 	url: $(form).attr('action'),
			// 	method: $(form).attr('method').toUpperCase(),
			// 	data: data,
			// }).done(function(response) {
			// 	if(typeof($(form).attr('data-function')) !== 'undefined') {
			// 		executeFunctionByName($(form).attr('data-function'), window, response);
			// 	} else {
			// 		console.log('No form function specified.');
			// 		swal('Oops...', 'Something went wrong!', 'error');
			// 	}
			// }).fail(function(response) {
			// 	swal('Oops...', 'Something went wrong!', 'error');
			// }).always(function(response) {
			// 	console.log("[AJAX RESPONSE]");
			// 	console.log(response);
			// 	$(form).find(':submit').button('reset');
			// });
			swal('Payment Complete.', 'Payment Complete!', 'success');
		});
	});
</script>
<?php
	include_once('footer.php');
?>