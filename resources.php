<?php  

	//db exmaple
    include_once('classes/database.class.php');

    $thelink = DatabaseConnection::create_connection("localhost", "root", "", "hackathon");

    $name = '21';
    $query = $thelink->query(
          "SELECT * FROM test WHERE name = ?;",
            array('s', $name)
          );

    var_dump($query);


?>







<!-- ajax exaple -->
<script type="text/javascript">

    //Ajax Call to calculations_ajax.php
    $(document).ready(function(){
        $("#randomiser").click(function(){
            alert("adventure~");

           // $.ajax({
           //      method: "POST",
           //      url: "calculations_ajax.php",
           //      data: {
           //              asdf:   1,
           //              qwer:  waist,
           //              zxcv: length,
           //          }
           //      }
           //  ).done(function( msg ){
           //      msg = JSON.parse(msg);
                
           //      $('div#circumference1').text("Circumference: " + msg[0]);
           //      $('div#length1').text("Total Length: " + msg[1]);
           //      $('div#interfacing1').text("Interfacing: " + msg[2]);


            // });
        });
    });

</script>




<style type="text/css">
    #map{
      height: 400px;
      widows: 100%;
    }
  </style>


  <h1>My Google Map</h1>
  <div id="map"></div>
  <script type="text/javascript">
    function initMap(){
      var options = {
        zoom: 8,
        center: {lat:3.1390,lng:101.6869}
      }

      var map = new google.maps.Map(document.getElementById('map'),options)
;
    }
  </script>


  <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY_HERE&callback=initMap"
    async defer></script>