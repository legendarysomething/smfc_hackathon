    <div class="page-loader" style="background: url(img/preloader.gif) center no-repeat #fff;"></div>
    <!-- FOOTER -->
    <footer style="background-image: url(img/background/bg-footer.jpg);">
      <!-- FOOTER INFO -->
      <div class="clearfix footerInfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-xs-12">
              <div class="footerText">
                <a href="index.html" class="footerLogo"><img src="img/logo-footer.png" alt="Footer Logo"></a>
                <p>ParkSini offers a revolutionary parking solution. <br> What’s better than democratizing parking by sharing your empty car porch?
                </p>
                <ul class="list-styled list-contact">
                  <li><i class="fa fa-phone" aria-hidden="true"></i>+6012 345 6789</li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@parksini.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerInfoTitle">
                <h4>Links</h4>
              </div>
              <div class="useLink">
                <ul class="list-unstyled">
                  <li><a href="aboutus.php">About Us</a></li>
                  <li><a href="login.php">Get Listed</a></li>
                  <li><a href="faq.php">How It Works</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="copyRightWrapper">
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="copyRightText">
                      <p>Copyright &copy; 2017. All Rights Reserved by 
 <a href="aboutus.php">Legendary Something</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- LOGIN  MODAL -->
  <div id="loginModal" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form class="loginForm" action="login.php" method="post">
            <div class="form-group">
              <i class="fa fa-user " aria-hidden="true"></i>
              <input type="username" class="form-control" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="password" class="form-control" id="pwd" placeholder="Password" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <div class="checkbox">
              <label><input type="checkbox">Remember Me</label>
              <a href="#" class="pull-right link">Forgot Password?</a>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <p>Don’t have an Account? <a href="register.php" class="link">Sign up</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- JAVASCRIPTS -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="plugins/waypoints/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRID3wiM3KVnJebRDv87SKVJADmUu9xD4&callback=initMap"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script> -->
  <script src="plugins/map/js/rich-marker.js"></script>
  <script src="plugins/map/js/infobox_packed.js"></script>
  <script src="js/single-map.js"></script>
  <script src="js/map.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
