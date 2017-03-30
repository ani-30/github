<!DOCTYPE html>

<html lang="en" style="overflow-x:hidden">
<head>
  <title>LIVE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <style>
    
         .menu-icon{
               display: none;
           }
           
       @media only screen and (max-width: 768px) {
         .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
} .menu-icon{
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
           
 
 
  </style>
</head>
<script> $(document).ready(function (){
          
          
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
            }</script>
             
<body>
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

<li class="active"><a href="live.php"> Live</a></li>
<li><a href="contacts.php"> Contact</a></li>
<li><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>
<div class="jumbotron">
<h1><center>Live Feeds</center></h1>
</div>
<br>
<p style="text-align: center;
  
<p id="demo" style="text-align: center;
  font-size: 60px;"></p>
<br>
<?php

    require 'connect.inc.php';
$query="Select * from live";
if($query_run=mysql_query($query))
{
	while($query_row=mysql_fetch_assoc($query_run)){
		$game=$query_row['game'];
		$livefeed=$query_row['livefeeds'];?>
		 <div class="container">
     <div class="jumbotron">
         <center> <p><?php echo($game)?>:<?php echo($livefeed)?></p></center>
     </div>
     </div>
	<?php	
		
	}
}?>
<br>
<br>
<p><i><b>⁠⁠⁠Zeal: Talk with your skills , play with ur heart</b></i></p>
<div class="container-fluid text-center">
<div class="jumbotron">
<h4>Proudly Presented by:<h4>
<p> NIT DELHI</p>
  <a href="https://www.facebook.com/zealnitdelhi/?fref=ts"><i class="fa fa-facebook"></i></a>
</div>
</div>
</div></div>
</body>
</html>
