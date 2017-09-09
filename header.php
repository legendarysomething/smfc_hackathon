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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
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
  <style type="text/css">
      .header_logo{
        font-family: 'Cuprum', sans-serif;
        color: #2196f3 !important;
        font-size: 32px;
        border: 2px solid #2196f3;
        /* border-radius: 3px; */
        padding: 9px;
        /*font-weight: bold;*/
      }
      .footer_logo{
        font-family: 'Cuprum', sans-serif;
        color: white;
        font-size: 32px;
        border: 2px solid white;
        /* border-radius: 3px; */
        padding: 9px;
        /*font-weight: bold;*/
        width: 130px;
      }
      .footer_logo:hover{
        color:white !important;
      }
  </style>
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
              <a class="navbar-brand" href="index.php" >
              <!-- <img src="img/logo-blue.png" alt="logo"> --> 
              <div class="header_logo">
                  <strong><b>PARK</b></strong>SINI
              </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right" style="    height: 125px;">
				<!-- header links -->
                  <!-- Commenting 'Quick Find' out -->
                  <li class=""><a href="quicksearch.php">quick find </a></li>
                <?php if(!$showUser){?>
                    <li class=""><a href="add_listing.php">get listed </a></li>
                <?php }else{ ?>
                    <li class=""><a href="login.php">get listed </a></li>
                <?php } ?>
                  <li class=""><a href="index.php#how-it-works">how it works? </a></li>
                  <?php if (!$showUser) { ?>
                  <li class=""><a href="profile.php">my account </a></li>
                  <?php } ?>
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    </header>