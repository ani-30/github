<html>
    <head>
        <title>Sports Club</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
 $(document).ready(function (){
          
          
         if(window.innerWidth<= 768){
              
            $('#nav-bar').hide();
              $('#pro').hide();
                  
          }
          else
          {
            $('#nav-bar').show();
             $('#pro').show();
               
         } 
         
          
      })
       function showNavBar(){
                $('#nav-bar').slideToggle('slow');
            }
</script>

        <style>
                 .menu-icon{
               display: none;
           }
           
       @media only screen and (max-width: 768px) {
        .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
}  .menu-icon{
               display: block;
                position: relative;
                top: 20px;
                font-size: 2em;
                left: 50px;
           }
           
           .nav-icon{
               color: white;
               cursor: pointer;
               left:30px;
           }
   
}
          .carousel {
    position: relative;
    top: -20px;
}
   
               .navbar {
    position: relative;
    min-height: 70px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
           
           #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}#myDiv {
  display: none;
  text-align: center;
}
            .col-md-4{
                left:5%;
            }
            h1{font-weight:bold;
               text-decoration:underline;}
            </style>
        </head>
        <body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">
           <!-Navigation bar-->

<nav class="navbar navbar-fixed-top navbar-inverse" style="" id="myTopnav">
<div class="container-fluid" >
<div class="navbar-header">
<div class="container">
<a class="navbar-brand" href="http://www.nitdelhi.ac.in" ><img src="zeallogo.png"><img><div id="pro" style="margin-left:-7px">NIT DELHI</div></a>
    <div class="menu-icon">
    <span onclick="showNavBar();" class="glyphicon glyphicon-align-justify nav-icon"></span>
</div>
</div></div>
<ul id="nav-bar" class="nav navbar-nav navbar-right">
<li> <a href="index.php">Home</a></li>
<li><a href="events.php"> Events</a></li>

<li><a href="live.php"> Live</a></li>
<li><a href="contacts.php"> Contact</a></li>
<li class="active"><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>
        
        
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
		
	<center>	
 <div class="row">
  <div class="col-sm-3">
      <br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo1">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
    <br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo2">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo3">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br>
	  <br>
		
		<center>
		 <div class="row">
  <div class="col-sm-3">
    <br>
	  	  <a href="#demo4" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo4">
	
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <br>
	  	  <a href="#demo5" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo5">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <br>
	  	  <a href="#demo6" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo6">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
    <br>
	  	  <a href="#demo7" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo7">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br>
	  <br>
		
		 <div class="row">
  <div class="col-sm-3">
     <br>
	  	  <a href="#demo8" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo8">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <br>
	  	  <a href="#demo9" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo9">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
     <br>
	  	  <a href="#demo10" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo10">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
      <br>
	  	  <a href="#demo11" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo11">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br>
	  <br>
		
		
		 <div class="row">
  <div class="col-sm-3">
      <br>
	  	  <a href="#demo12" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo12">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
     <br>
	  	  <a href="#demo13" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo13">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
    <br>
	  	  <a href="#demo14" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo14">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        
		 
  <div class="col-sm-3">
    <br>
	  	  <a href="#demo15" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo15">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	  <br>
	  <br>
		
		 <div class="row">
  <div class="col-sm-3">
   <br>
	  	  <a href="#demo16" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo16">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      <br>
	  	  <a href="#demo17" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo17">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
 <div class="col-sm-3">
      
	  	  <a href="#demo19" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a><p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo19">
	
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div>	<?php $d++;?>  
        
		 
  <div class="col-sm-3">
     <br>
	  	  <a href="#demo20" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	  <p><strong><?php echo($Name[$d])?></strong></p>
	  <div id="demo20">
	<p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div></div>
	  <?php $d++;?>
	  
	
	  
	 
	   
	  
	  <br>
	  <p><i><b>Zeal... Zest to be the best<b></i></p>
	  <br>
		
		  <div class="container-fluid text-center">
            <div class="jumbotron">
                <h4>Proudly Presented by:<h4>
                        <p> NIT DELHI</p>
                        <a href="https://www.facebook.com/zealnitdelhi/?fref=ts"><i class="fa fa-facebook"></i></a>

                        </div>
                        </div>
</div>
                        </body>
                        </html>

