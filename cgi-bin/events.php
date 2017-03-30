<html>
    <head>
        <title>EVENTS</title>
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
          
           $('.carousel').carousel({
      interval:2000
    })
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
        .jumbotron {
    padding: 48px 0;
    top: -20;
    position: relative;
}
                 .menu-icon{
               display: none;
           }
           .carousel-inner > .item > img {
    line-height: 1;
    margin: auto;
                height: 600px;
}
               .carousel {
    position: relative;
                   top:-20px;
                background-color: black;
                       
    
}
           
       @media only screen and (max-width: 768px) {
                .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
}  .navbar {
    position: relative;
    min-height: 90px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}

        .menu-icon{
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
        
   
               .navbar {
    position: relative;
    min-height: 70px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
           
        .row {
    margin-right: 100px;
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
       <body onload="myFunction()" style="margin:0; overflow">

<div id="loader"></div>
        <div style="display:none;" id="myDiv">
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
<li class="active"><a href="events.php"> Events</a></li>

<li><a href="live.php"> Live</a></li>
<li><a href="contacts.php"> Contact</a></li>
<li><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>
       
          <div id="myCarousel" class="carousel slide" data-ride="carousel">


<div class="carousel-inner" role="listbox">
    <div class="item active"><img src="zeal.jpg" alt="Linoel Messi"></div>
<div class="item"><img src="e1.jpg"></div>
<div class="item"><img src="e2.jpg"></div>
<div class="item"><img src="e3.jpg"></div>
<div class="item"><img src="e4.jpg"></div>
<div class="item"><img src="e5.jpg"></div>
<div class="item"><img src="e6.jpg"></div>
<div class="item"><img src="e7.jpg"></div>
<div class="item"><img src="e8.jpg"></div>
<div class="item"><img src="e9.jpg"></div>
        

</div>



 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span></a>
</div>
        <div class="jumbotron">
            <center>
                <h1><center>Events</center></h1>
        </div>
		<?php
		
    require 'connect.inc.php';
	$query="Select * from events";
	$d=0;
	$eventname=array();
	$eventphoto=array();
if($query_run=mysql_query($query))
{

	while($query_row=mysql_fetch_assoc($query_run))
	{
		$eventname[$d]=$query_row['Eventname'];
		$eventphoto[$d]=$query_row['Eventphoto'];
		$d++;}
		$d=0;}?>
	
     
        <!--image gallery-->
        <div class="row">
            <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d]);?>
                </h3>
				
				
				 <!-- Trigger the modal with a button -->
  <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>


  
  
  
				
                
            </div>
           <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
               				 <!-- Trigger the modal with a button -->
 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>
 </div>
          <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>

 
            </div>
           <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
               <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>

 
            </div>
          <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>


            </div>
        </div>
 <div class="row">
            <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>


            </div>
           <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>

         </div>
     
     
           
          <div class="col-md-4">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>


            </div>
        </div>
         <div class="row">
         
             <div class="col-md-3">
              


            </div>
               <div class="col-md-2">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                 <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>


            </div>
             <div class="col-md-2">
              


            </div>
           <div class="col-md-3">
                <h3>
                    <?php echo($eventname[$d])?>
                </h3>
                <a href="<?= $eventname[$d] ?>.pdf"><img src=<?php echo($eventphoto[$d++])?> alt="Basketball "></img></a>

         </div>
           
     
     
           
          
        </div>
    <center>
<br>
<p><i><b>ZEAL:Pain is temporary, Pride is forever<b></i></p>
<br>
<br>

        <div class="container-fluid text-center">
            <div class="jumbotron">
                <h4>Proudly Presented by:<h4>
                        <p> NIT DELHI</p>
                        <a href="https://www.facebook.com/zealnitdelhi/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>

                        </div>
                        </div>
                       </div>
                        </body>
                        </html>
