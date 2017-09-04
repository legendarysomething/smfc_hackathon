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