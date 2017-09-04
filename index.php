<?php 

//Temporary index page



    include_once('header.php');


 ?>

 <img src="profile.jpg" class="img-responsive img-circle" alt="Cinque Terre">

<div class="page-header">
  <h1 style ="padding-left: 20px; font-family: 'Open Sans', sans-serif;">Le Hackathon -  <small>Beta v1.0</small></h1>
</div>

<div class="row">	    
	<div class="col-lg-3" style="padding: 25px; padding-top: 0px;"> 
	  	<div class="panel panel-default">
		  <div class="panel-heading">
		 	 <h3>testst</h3>
		  </div>
		  <div class="panel-body">
			<input type="text" id = "w1" class="form-control" placeholder="Genre">
			<br>
			<input type="text" id = "l1" class="form-control" placeholder="Song">
			<br><br>
			<button class="btn btn-danger btn-block" id ="randomiser" type="submit">Mah BUTTON</button>
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



