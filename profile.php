<?php 

$page_header = 'My Profile';
include_once('header.php');
?>
<!-- DASHBOARD PROFILE SECTION -->
<section class="clearfix bg-dark profileSection">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="dashboardBoxBg mb30">
					<div class="profileImage">
						<img src="img/dashboard/user-2.jpg" alt="Image User" class="img-circle">
						<div class="file-upload profileImageUpload">
							<div class="upload-area">
								<input type="file" name="img[]" class="file">
								<button class="browse" type="button">Upload a Picture <i class="icon-listy icon-upload"></i></button>
							</div>
						</div>
					</div>
					<div class="profileUserInfo bt profileName">
						<p>Your Current Rating</p>
						<div>
							<span class="glyphicon glyphicon-star" style="color:gold;"></span>
							<span class="glyphicon glyphicon-star" style="color:gold;"></span>
							<span class="glyphicon glyphicon-star" style="color:gold;"></span>
							<span class="glyphicon glyphicon-star" style="color:gold;"></span>
							<span class="glyphicon glyphicon-star" style="color:gold;"></span>
							<span>5.0</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-7 col-xs-12">
				<form>
					<div class="dashboardBoxBg">
						<div class="profileIntro">
							<h2>Your Profile</h2>
						</div>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>About You</h3>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="firstNameProfile">Fast Name</label>
									<input type="text" class="form-control" id="firstNameProfile" placeholder="Jasmine">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="lastNameProfile">Last Name</label>
									<input type="text" class="form-control" id="lastNameProfile" placeholder="Chee">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="emailProfile">Email</label>
									<input type="text" class="form-control" id="emailProfile" placeholder="jasminechee@email.com">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="phoneProfile">Phone</label>
									<input type="text" class="form-control" id="phoneProfile" placeholder="+012 345 6789">
								</div>
								<div class="form-group col-xs-12">
									<label for="aboutYou">About You</label>
									<textarea class="form-control" rows="5" id="aboutYou" placeholder="Poor fresh graduate looking for affordable parking."></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="btn-area mt30">
						<button class="btn btn-primary" type="button" id="save_changes">Save Change</button>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>Update password</h3>
							<div class="row">
								<div class="form-group col-xs-12">
									<label for="currentPassword">Current Password</label>
									<input type="password" class="form-control" id="currentPassword" placeholder="********">
								</div>
								<div class="form-group col-xs-12">
									<label for="newPassword">New Password</label>
									<input type="password" class="form-control" id="newPassword" placeholder="New Password">
								</div>
								<div class="form-group col-xs-12">
									<label for="confirmPassword">Confirm Password</label>
									<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
								</div>
								<div class="form-group col-xs-12">
									<button class="btn btn-primary" id="change_action" type="button">Change Password</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery( "#change_action" ).click(function() {
			swal({
			  title: 'Password Updated!',
			  text: 'Your password has been successfully changed!',
			  type: 'success'
			});
		});
		jQuery( "#save_changes" ).click(function() {
			swal({
			  title: 'Profile Updated',
			  text: 'The changes to your profile has been saved successfully!',
			  type: 'success'
			});
		});
	});
</script>
<?php
include_once('footer.php');
?>
