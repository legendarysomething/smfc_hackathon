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
  <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">

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
				<!-- header links -->
                  <li class=""><a href="geosearch.php">quick find </a></li>
                  <li class=""><a href="login.php">get listed </a></li>
                  <li class=""><a href="faq.php">how it works? </a></li>
                  <li class=""><a href="myaccount.php">my account </a></li>
                </ul>
            </div>
            <?php if($showUser){?>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#loginModal">
            <?php }else{ ?>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" onclick="location.href ='logout.php'">
            <?php } ?>
                <span><?=$islogin?></span>
                <i class="fa fa-sign-in" aria-hidden="true"></i>
            </button>
          </div>
        </nav>
      </div>
     <!-- JAVASCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="plugins/waypoints/waypoints.min.js"></script>
    <script src="plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/isotope/isotope.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="plugins/isotope/isotope-triger.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.common.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script> -->
    <script src="plugins/map/js/rich-marker.js"></script>
    <script src="plugins/map/js/infobox_packed.js"></script>
    <script src="js/single-map.js"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
    </header>