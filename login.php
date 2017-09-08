<?php
    session_start();
	if($_SESSION['islogin']){
		header("location: /smfc_hackathon");
		exit;
	}
	if(isset($_POST)){
		$_SESSION["islogin"] = true;
		header("location: /smfc_hackathon");
		exit;
	}
	$page_header = 'Login';
	include_once('header.php');
?>
<!-- LOGIN SECTION -->
<section class="clearfix loginSection">
  <div class="container">
    <div class="row">
      <div class="center-block col-md-5 col-sm-6 col-xs-12">
        <div class="panel panel-default loginPanel">
          <div class="panel-heading text-center">Login</div>
          <div class="panel-body">
            <form class="loginForm" action="" method="POST">
              <div class="form-group">
                <label for="userName">Username *</label>
                <input type="text" class="form-control" id="userName">
                <p class="help-block">Please enter your username.</p>
              </div>
              <div class="form-group">
                <label for="userPassword">Password *</label>
                <input type="password" class="form-control" id="userPassword">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary pull-left">Log In</button>
                <a href="login.html#" class="pull-right link">Forgot Your Password?</a>
              </div>
            </form>
          </div>
          <div class="panel-footer text-center">
            <p>Not a member yet? <a href="register.php" class="link">Sign up</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php
	include_once('footer.php');
?>
