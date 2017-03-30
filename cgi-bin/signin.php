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
               left:100px
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
          li{
          text-align:center;
          }
h1{font-weight:bold;
text-decoration:underline;}
</style>
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
</head>
<?php 

require 'connect.inc.php';
require 'core.inc.php';

if (loggedin())
{
	header('location: welcome.php');
}
else
{
	if(isset($_POST['email']) && isset($_POST['pass']))
	{
		
	echo $email=$_POST['email'];
	$password=$_POST['pass'];
	if(!empty($email) && !empty($password))
	{
		$query="Select * from regrecord where email='$email' and password='$password'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0)
			{
		echo '<script language="javascript">';
echo 'alert("invalid")';
echo '</script>';
			}
			else
			{
				$email=mysql_result($query_run,0,'email');
			echo	$_SESSION['email']=$email;
				header('Location:welcome.php');
				
			echo '<script language="javascript">';
echo 'alert("valid")';
echo '</script>';	
				
		///direct to welcome page
			}
			
		}
		else{
			echo '<script language="javascript">';
echo 'alert("valid")';
echo '</script>';
		}
	}
	else
	{
		echo'plz enter the email and password both';
	}
	}
	
}





?>

<!-Navigation bar-->
<div id="mydiv">
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
<li><a href="sportsclub.php"> Sports Club</a></li>
<li class="active"><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>
     
		 <div class="jumbotron">
            <center>
                <h1><center>Sign In</center></h1>
        </div>
<form class="form-horizontal" role="form" action="<?php echo $current_file; ?>" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-3">
      <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-3"> 
      <input name="pass" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <a href="email.html">Forgot Password!</a>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
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