<html>
    <head>
        <title>LOG IN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
            .col-md-4{
                left:5%;
            }
            h1{font-weight:bold;
               text-decoration:underline;}
            </style>
        </head>
        <body>
            <nav class="navbar navbar-fixed-top navbar-inverse" style="">
            <div class="container-fluid" >
                <div class="navbar-header">
                    <div class="container">
                        <a class="navbar-brand" href="http://www.nitdelhi.ac.in" ><img src="NITD logo.png"><img>NIT DELHI</a>
                    </div></div>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="index.php">Home</a></li>
                    <li ><a href="events.php"> Events</a></li>
                    <li><a href="sponsors.html"> Sponsors</a></li>
                    <li><a href="live.php"> Live</a></li>
                    <li><a href="contacts.php"> Contact</a></li>
					<li class="active"><a href="sportsclub.php"> Sports Club</a></li>
                    <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
		<br>
		<br>
		<br>
		 <div class="jumbotron">
            <center>
                <h1><center>Sports Club</center></h1>
        </div>
		<center><div class="container">
  <div id="Contact">
       <h2><u>Our Team</u></h2> 
       <br><br><br>
	      <?php
	   $d=0;$e=0;
    require 'connect.inc.php';
	$query="Select Name,Phoneno,Designation,Contactphoto from  sportsclub";
$Name=array();
$phoneno=array();
$designation=array();
$photoname=array();
	if($query_run=mysql_query($query))
	{
		while($query_row=mysql_fetch_assoc($query_run))
		{
		
		$Name[$d]=$query_row['Name'];
	$phoneno[$d]=$query_row['Phoneno'];
	$designation[$d]=$query_row['Designation'];
    $photoname[$d]=$query_row['Contactphoto'];
					$d=$d+1;
	
	}
	$d=0;}
	   
	   
	   
	   ?>
	     <div class="row">
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo1" class="collapse">
	  <p><?php echo($Name[1])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo2" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo3" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br>
	  <br>
	  
	<div class="row">
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo1" class="collapse">
	  <p><?php echo($Name[1])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo2" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo3" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br><br>
	  <div class="row">
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo1" class="collapse">
	  <p><?php echo($Name[1])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo2" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo3" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?><br><br>
	  <div class="row">
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo1" class="collapse">
	  <p><?php echo($Name[1])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo2" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <p><strong><?php echo($Name[$d])?></strong></p><br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <div id="demo3" class="collapse">
	  <p><?php echo($Name[$d])?></p>
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
           </center>
		
		
		
<?php>
		

		
		
		
		
		
		
		
		
		
		
		<?>
		  <div class="container-fluid text-center">
            <div class="jumbotron">
                <h4>Proudly Presented by:<h4>
                        <p> NIT DELHI</p>
                        <a href="https://www.facebook.com/zealnitdelhi/?fref=ts"><i class="fa fa-facebook"></i></a>

                        </div>
                        </div>

                        </body>
                        </html>

