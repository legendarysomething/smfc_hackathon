<?php 

//Temporary index page


  
    include_once('classes/database.class.php');

    $thelink = DatabaseConnection::create_connection("localhost", "root", "", "hackathon");

    $name = '21';
    $query = $thelink->query(
          "SELECT * FROM test WHERE name = ?;",
            array('s', $name)
          );

    var_dump($query);



    echo "hello";

  


    include_once('header.php');
    include_once('footer.php');


 ?>

 <img src="profile.jpg" class="img-responsive img-circle" alt="Cinque Terre">

<div class="page-header">
  <h1 style ="padding-left: 20px; font-family: 'Open Sans', sans-serif;">Sam's Toolkit -  <small>Beta v1.0</small></h1>
</div>

<div class="row">	    
	<div class="col-lg-3" style="padding: 25px; padding-top: 0px;"> 
	  	<div class="panel panel-default">
		  <div class="panel-heading">
		 	 <h3>Genre and Song Randomiser</h3>
		  </div>
		  <div class="panel-body">
			<input type="text" id = "w1" class="form-control" placeholder="Genre">
			<br>
			<input type="text" id = "l1" class="form-control" placeholder="Song">
			<br><br>
			<button class="btn btn-danger btn-block" id ="randomiser" type="submit">Find me my combo!</button>
		  </div>
		</div>
	</div>
</div>


<!-- Javascript Start -->
<script type="text/javascript">

    //Ajax Call to calculations_ajax.php
    $(document).ready(function(){
        $("#randomiser").click(function(){
            alert("adventure~");

           // $.ajax({
           //      method: "POST",
           //      url: "calculations_ajax.php",
           //      data: {
           //              type:   1,
           //              waist:  waist,
           //              height: length,
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



