<html lang="en">
<head>
  <title>CONTACT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <style>
   .myTopnav{
   text-align:center;
   }
            .menu-icon{
               display: none;
           }
           
       @media only screen and (max-width: 768px) {
      
      .googleMap{ width:300px;
      }  .menu-icon{
               display: block;
                position: relative;
                top: 20px;
                font-size: 2em;
                left: 50px;
           }
             .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
}
           .nav-icon{
               color: white;
               cursor: pointer;
              left:30px
           }
   
}
.googleMap{ width:500px;
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
h1{font-weight:bold;
text-decoration:underline;}
p{font-weight:bold;} 
 
  </style>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFsrozxK5S4axwNXG5xf9bQpmF6Urj8wg &callback=initMap" async defer></script>

<script>
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

function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(28.8432494,77.1049614),
    zoom:16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  
  var marker=new google.maps.Marker({
  position:new google.maps.LatLng(28.8432494,77.1049614),
  animation:google.maps.Animation.BOUNCE
  });
  
  marker.setMap(map);
  
  var infowindow = new google.maps.InfoWindow({
  content:"WE ARE HERE!"
  });

infowindow.open(map,marker);

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</head>
 <body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="text-align:center">
        
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
<li class="active"><a href="contacts.php"> Contact</a></li>
<li><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>

<div class="jumbotron">
<h1><center>Spot Us Here</center></h1>
</div>
<div class="container"  >
<center><div id="googleMap" style="height:380px;"></div><center>
</div>
<div class="jumbotron">
<h1><center>Contact</center></h1>
</div>

<center><div class="container">
  <div id="Contact">
       <h2><u>Our Team</u></h2> 
       <br><br><br>
	   <?php
	   $d=0;$e=0;
    require 'connect.inc.php';
	$query="Select contactname,phoneno,designation,contactphoto from contcts";
$contactname=array();
$phoneno=array();
$designation=array();
$photoname=array();
	if($query_run=mysql_query($query))
	{
		while($query_row=mysql_fetch_assoc($query_run))
		{
		
		$contactname[$d]=$query_row['contactname'];
	$phoneno[$d]=$query_row['phoneno'];
	$designation[$d]=$query_row['designation'];
    $photoname[$d]=$query_row['contactphoto'];
					$d=$d+1;
	
	}
	$d=0;}
	   
	   
	   
	   ?>
	         <div class="row">
  <div class="col-sm-12">
     <br>
	  	  <a href="#demo" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a>
	   <p><strong><?php echo($contactname[$d])?></strong></p>
	  <div id="demo">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div></div><br><br>
	  <div class="row">
 <div class="col-sm-12">
     <br>
	  	  <a href="#demo1" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a> <p><strong><?php echo($contactname[$d])?></strong></p>
	  <div id="demo1">
	  
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
	  </div><br><br>
	  <div class="row">
 <div class="col-sm-6">
     <br>
	  	  <a href="#demo2" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a> <p><strong><?php echo($contactname[$d])?></strong></p>
	  <div id="demo2">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>	  
        

         
		 
  <div class="col-sm-6">
     <br>
	  	  <a href="#demo3" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a> <p><strong><?php echo($contactname[$d])?></strong></p>
	  <div id="demo3">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div></div>
	  <?php $d++;?></div><br><br>
	  <div class="row">
 <div class="col-sm-12">
     <br>
	  	  <a href="#demo4" data-toggle="collapse">
              <img src=<?php echo($photoname[$d])?> class="img-circle person" alt="Random Name">
	  </a> <p><strong><?php echo($contactname[$d])?></strong></p>
	  <div id="demo4">
	 
      <p><?php echo($phoneno[$d])?></p>
      <p><?php echo($designation[$d])?></p>
	  </div><?php $d++;?></div>
  
         </div>
         <br>
         <p><i><b>ZEAL:⁠⁠⁠Don't stop when it hurts....stop when it's done!<b></i></p>
         <br>
         <br>
           </center>
<div class="container-fluid text-center">
<div class="jumbotron">
<h4>Proudly Presented by:<h4>
<p> NIT DELHI</p>
  <a href="https://www.facebook.com/zealnitdelhi/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>