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
			<div class="col-sm-12 col-xs-12">
				<div class="signUpFormArea">
					<div class="priceTableTitle">
						<h2>Account Registration</h2>
						<p>Please fill out the fields below to create your account. We will send your account information to the email address you enter. Your email address and information will NOT be sold or shared with any 3rd party. If you already have an account, please, <a href="login.php">click here</a>.</p>
					</div>
					<div class="signUpForm">
						<form action="login.php" method="POST">
							<div class="formSection">
								<h3>Contact Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">First Name*</label>
										<input type="text" class="form-control" id="firstName" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Last Name*</label>
										<input type="text" class="form-control" id="lastName" required>
									</div>
									<div class="form-group col-xs-12">
										<label for="emailAdress" class="control-label">Email Address*</label>
										<input type="email" class="form-control" id="emailAdress" required>
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Account Information</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Username*</label>
										<input type="text" class="form-control" id="usernames" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordFirst" class="control-label">Password*</label>
										<input type="password" class="form-control" id="password" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordAgain" class="control-label">Password (re-type)*</label>
										<input type="password" class="form-control" id="passwordAgain" required>
									</div>
								</div>
							</div>
							<div class="formSection">
								<div class="row">
									<div class="form-group col-xs-12">
										<input type="checkbox" name="newsletter" id="newsletter_id">
										<label for="newsletter_id">Subscribe me to the newsletter for the latest news and offer</label>
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
								<p><span>Payments can be made using any major credit card, without the need for a PayPal account</span>. If you already have a PayPal account, you can also pay with PayPal funds or through your bank account. We don't keep any credit card information stored on our site. No tax is added to your order. For more information <a href="https://www.paypal.com">www.paypal.com</a></p>
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
