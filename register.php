<?php 
$page_header = 'Register';
include_once('header.php');
?>
<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection" style="background-image: url(sign-up.html);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>Registration</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- SIGN UP SECTION -->
<section class="clearfix signUpSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="priceTableWrapper">
					<div class="priceTableTitle">
						<h2>Free <small>Need Free Support</small></h2>
					</div>
					<div class="priceAmount">
						<h2>0<small>USD/Year</small></h2>
					</div>
					<div class="priceInfo">
						<div class="priceShorting">
							<div class="checkbox-radio">
								<input id="checkbox41" type="checkbox" name="checkbox" value="41">
								<label for="checkbox41">
									<span></span>Not Highlighted listing
								</label>
							</div>
							<div class="checkbox-radio">
								<input id="checkbox42" type="checkbox" name="checkbox" value="42">
								<label for="checkbox42">
									<span></span>Low listing placement on:
								</label>
							</div>
							<div class="checkbox-radio marginCheck">
								<input id="radio41" type="radio" name="radio" value="41">
								<label for="radio41">
									<span><span></span></span>Search results
								</label>
							</div>
							<div class="checkbox-radio marginCheck">
								<input id="radio42" type="radio" name="radio" value="42">
								<label for="radio42">
									<span><span></span></span>Selected categories
								</label>
							</div>
							<div class="checkbox-radio marginCheck">
								<input id="radio43" type="radio" name="radio" value="43">
								<label for="radio43">
									<span><span></span></span>Added keywords
								</label>
							</div>
						</div>
						<ul class="list-unstyled">
							<li>6 Products</li>
							<li>8 Photos</li>
							<li>5 Keywords</li>
							<li>6 Categories</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
				<div class="signUpFormArea">
					<div class="priceTableTitle">
						<h2>Account Registration</h2>
						<p>Please fill out the fields below to create your account. We will send your account information to the email address you enter. Your email address and information will NOT be sold or shared with any 3rd party. If you already have an account, please, <a href="login.html">click here</a>.</p>
					</div>
					<div class="signUpForm">
						<form action="sign-up.html#">
							<div class="formSection">
								<h3>Contact Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">First Name*</label>
										<input type="text" class="form-control" id="firstName">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Last Name*</label>
										<input type="text" class="form-control" id="lastName">
									</div>
									<div class="form-group col-xs-12">
										<label for="emailAdress" class="control-label">Email Address*</label>
										<input type="email" class="form-control" id="emailAdress">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Account Information</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Username*</label>
										<input type="text" class="form-control" id="usernames">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordFirst" class="control-label">Password*</label>
										<input type="password" class="form-control" id="password">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordAgain" class="control-label">Password (re-type)*</label>
										<input type="password" class="form-control" id="passwordAgain">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Security Control</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Confirm that you are human*</label>
										<img src="img/business/recaptcha.jpg" alt="Image captcha" class="img-responsive img-rtl">
									</div>
									<div class="form-group col-xs-12">
										<div class="checkbox">
											<label>
												<input type="checkbox">
												I agree to the <a href="terms-of-services.html">Terms of Use</a> & <a href="sign-up.html#">Privacy Policy</a>. Your business listing is fully backed by our 100% money back guarantee.
											</label>
										</div>
									</div>
									<div class="form-group col-xs-12 mb0">
										<button type="submit" class="btn btn-primary">Create Account</button>
									</div>
								</div>
							</div>
							<div class="formSection">
								<div class="cardBox">
									<div class="paymentMethod">
										<img src="img/business/paypal.png" alt="Image paypal">
									</div>
									<ul class="list-inline">
										<li><a href="sign-up.html#"><img src="img/business/visa.jpg" alt="Image card"></a></li>
										<li><a href="sign-up.html#"><img src="img/business/master-card.jpg" alt="Image card"></a></li>
										<li><a href="sign-up.html#"><img src="img/business/american-express.jpg" alt="Image card"></a></li>
										<li><a href="sign-up.html#"><img src="img/business/discover.jpg" alt="Image card"></a></li>
									</ul>
								</div>
								<p>We use <span>PayPal</span> to process all transactions securely. <span>Payments can be made using any major credit card, without the need for a PayPal account</span>. If you already have a PayPal account, you can also pay with PayPal funds or through your bank account. We don't keep any credit card information stored on our site. No tax is added to your order. For more information <a href="https://www.paypal.com">www.paypal.com</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include_once('footer.php');
?>
