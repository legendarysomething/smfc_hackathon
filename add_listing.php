<?php 
	$page_header = 'Home';
	include_once('header.php');
?>
<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection" style="background-image: url(sign-up.html);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>Add Listing</h2>
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
						<h2>Register a Parking Space!</h2>
					</div>
					<div class="signUpForm">
						<form action="login.php" method="POST">
							<div class="formSection">
								<h3>Parking Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">Title</label>
										<input type="text" class="form-control" id="firstName" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Contact No.</label>
										<input type="text" class="form-control" id="lastName" required>
									</div>
									<div class="form-group col-xs-12">
										<label for="emailAdress" class="control-label">Address*</label>
										<input type="text" class="form-control" id="emailAdress" required>
									</div>
									<div class="file-upload profileImageUpload form-group col-xs-12">
										<div class="upload-area">
											<input type="file" name="img[]" class="file">
											<button class="browse" type="button" style="border: 1px #848484 solid;padding: 10px;border-radius: 5px;">Upload a Picture <i class="icon-listy icon-upload"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Pricing and Features</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Price</label>
										<input type="text" class="form-control" id="usernames" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordFirst" class="control-label">Parking Spot Type</label>
										<input type="text" class="form-control" id="password" required>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordAgain" class="control-label">Additional Features</label>
										<input type="text" class="form-control" id="passwordAgain" required>
									</div>
								</div>
							</div>
							<div class="formSection">
								<div class="row">
									<div class="form-group col-xs-12 mb0">
										<button type="submit" class="btn btn-primary">Add Listing</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('form').submit(function(evt) {
			evt.preventDefault();
			swal({
			  title: 'Listing Added',
			  text: 'You will be redirected to the home page!',
			  type: 'success'
			}).then(
			  function () {window.location = "/smfc_hackathon/index.php";},
			);
		});
	});
</script>
<?php
	include_once('footer.php');
?>
