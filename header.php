<?php 
    // Start the session
    session_start();
    error_reporting(0); //(to turn off warnings if wanted)
    if(!isset($page_header)){
        $page_header = "Hackathon";
    }
    if($_SESSION['islogin']){
        $islogin = "Logout";
    }else{
        $islogin = "Login";
        $showUser = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$page_header?></title>
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/listtyicons/style.css" rel="stylesheet">
  <link href="plugins/bootstrapthumbnail/bootstrap-thumbnail.css" rel="stylesheet">
  <link href="plugins/datepicker/datepicker.min.css" rel="stylesheet">
  <link href="plugins/selectbox/select_option1.css" rel="stylesheet">
  <link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/isotope/isotope.min.css" rel="stylesheet">
  <link href="plugins/map/css/map.css" rel="stylesheet">
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
</head>
<body class="body-wrapper">
  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header">
      <!-- TOP INFO BAR -->
      <div class="nav-wrapper navbarWhite">
        <div class="container-fluid header-bg">
          <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-6 header-left empty">empty
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-6 header-right empty">empty
            </div>
          </div>
        </div>
        <!-- NAVBAR -->
        <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="img/logo-blue.png" alt="logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" dropdown singleDrop">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="index.php">Map Version</a></li>
                      <li><a href="index-2.html">Travel Version</a></li>
                      <li><a href="index-3.html">Automobile Version</a></li>
                    </ul>
                  </li>
                  <li class=" dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listing <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="row dropdown-menu">
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li><h5>listing Grids</h5></li>
                            <li><a href="category-grid.html">Listing Grid Left</a></li>
                            <li><a href="category-grid-right.html">Listing Grid Right</a></li>
                            <li><a href="category-grid-full.html">Listing Grid Fullwidth</a></li>
                            <li><h5>listing lists</h5></li>
                            <li><a href="category-list-left.html">Listing list Left</a></li>
                            <li><a href="category-list-right.html">Listing list Right</a></li>
                            <li><a href="category-list-full.html">Listing list Full</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li><h5>listing Sidebar Map</h5></li>
                            <li><a href="listing-sidebar-map-left.html">Listing Sidebar Map left</a></li>
                            <li><a href="listing-sidebar-map-right.html">Listing Sidebar Map right</a></li>
                            <li><a href="listing-sidebar-map-full.html">Listing Sidebar Map Full</a></li>
                            <li><h5>listing Details</h5></li>
                            <li><a href="listing-details-left.html">Listing Details Left</a></li>
                            <li><a href="listing-details-right.html">Listing Details Right</a></li>
                            <li><a href="listing-details-full.html">Listing Details Full</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li class="mega-img">
                                <a href=""><img src="img/works/works-big-3.png" alt=""></a>
                            </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="active dropdown singleDrop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a href="contact-us.html">Contact Us</a></li>
                      <li><a href="terms-of-services.html">Terms and Conditions</a></li>
                      <li><a href="sign-up.html">Create Account</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="pricing-table.html">Pricing</a></li>
                      <li><a href="payment-process.html">Payment</a></li>
                      <li><a href="how-it-works.html">How It Works</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="blog.html">blog </a></li>
                  <li class=" dropdown singleDrop">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="dashboard.html">Dashboard</a></li>
                      <li><a href="add-listings.html">Add Listing</a></li>
                      <li><a href="edit-listings.html">Edit Listing</a></li>
                      <li><a href="listings.html">My Listings</a></li>
                      <li><a href="profile.php">My Profile</a></li>
                      <li><a href="oders.html">My Orders</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
            <?php if(!$islogin){?>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#loginModal">
            <?php }else{ ?>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" onclick="location.href ='logout.php'">
            <?php } ?>
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                <span><?=$islogin?></span>
            </button>
          </div>
        </nav>
      </div>
    </header>