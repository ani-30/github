<html>
    <head>
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
           
 
 
  </style>
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
  </script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            </head>
    <body>
	<?php 
	
	
	include'core.inc.php';
	include'connect.inc.php';
	$d=0;
	$events=array();
	$email=$_SESSION['email'];
	$query="select * from regrecord where email='$email'";
	if($query_run=mysql_query($query))
	{
		$name=mysql_result($query_run,0,'Name');
		$roll=mysql_result($query_run,0,'Rollno');
		$branch=mysql_result($query_run,0,'Branch');
		$sex=mysql_result($query_run,0,'Sex');
		$events[$d++]=mysql_result($query_run,0,'Events');
		while($query_row=mysql_fetch_assoc($query_run))
		{
			$events[$d]=$query_row['Events'];
			$d++;
		}
	
		
		
		
		
		
	}
	
	
	
	

	
	
	
	
	?>
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
<li><a href="index.php">Home</a></li>
<li><a href="events.php"> Events</a></li>

<li><a href="live.php"> Live</a></li>
<li><a href="contacts.php"> Contact</a></li>
<li><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>

<div class="jumbotron">
<h1><center>Welcome</center></h1>
</div>
<center>NAME:<?php echo $name?><br>Roll No:<?php echo $roll?><br>BRANCH:<?php echo $branch?><br><br>
    <table align="center" border="1" class="table">
<tr>
<th colspan="4" ><center>Events Participated<center></th>
</tr>
<tr>
<th>SPORT</th>
<th>VENUE</th>
<th>DATE</th>
<th>TIME</th>
</tr>

<?php

for($f=0;$f<$d;$f++)
{
$query1="Select * from events where Eventname='$events[$f]'";
if($query1_run=mysql_query($query1))
{
	
	$eventname=mysql_result($query1_run,0,'Eventname');
	$eventvenue=mysql_result($query1_run,0,'Eventvenue');
	$eventdate=mysql_result($query1_run,0,'Eventdate');
	$eventtime=mysql_result($query1_run,0,'Eventtime');







?>
<tr>
    <td><?php echo $eventname?></td>
    <td><?php echo $eventvenue?></td>
    <td><?php echo $eventdate?></td>
    <td><?php echo $eventtime?></td>
</tr>

<?php
}
}
?>
 

  </table>   
      <form action="logout.php">
  <div class="form-group"> 
    
        <a href="reregister.html">Re-Register</a>
      <button type="submit" class="btn btn-default">Log Out!</button>
    
  </div>
          </form>
      <div class="container-fluid text-center">
<div class="jumbotron">
<h4>Proudly Presented by:</h4>
<p> NIT DELHI</p>
  <a href="https://www.facebook.com/zealnitdelhi/?fref=ts"><i class="fa fa-facebook"></i></a>

</div>
</div></div>
    </body>
</html>