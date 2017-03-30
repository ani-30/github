<!doctype html>

<html lang="en">
<head>
  <title>Zeal</title>
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
        .menu-icon{
               display: block;
                position: relative;
                top: 20px;
                font-size: 2em;
                left: 80px;
           }
           
           .nav-icon{
               color: white;
               cursor: pointer;
           }
       .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
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
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
   
   
       .item > img{
          width:100%;
       }
 h1{font-weight:bold;
text-decoration:underline;}
  </style>
</head>

   <body onload="myFunction()" style="margin:0; overflow-x:hidden">

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
<li class="active"> <a href="index.php">Home</a></li>
<li><a href="events.php"> Events</a></li>

<li><a href="live.php"> Live</a></li>
<li><a href="contacts.php"> Contact</a></li>
<li><a href="sportsclub.php"> Sports Club</a></li>
<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
   
</ul>
</div>
</nav>

<!--slider-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">


<div class="carousel-inner" role="listbox">
<div class="item active"><img src="Linoel.jpg" alt="Linoel Messi"></div>
<div class="item"><img src="Virat-Kohli1.jpg"></div>
<div class="item"><img src="Lionel_Messi.jpg"></div>
<div class="item"><img src="c1.jpg"></div>
<div class="item"><img src="c2.jpg"></div>
<div class="item"><img src="c3.jpg"></div>
<div class="item"><img src="c4.jpg"></div>
</div>

 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span></a>
</div>
<!--about nit delhi-->
<div class="container text-center" id="about" >
<h1>About Zeal Nit Delhi</h1>
<p>Each year, in the month of February, the students of the institute organize a sports festival, called Zeal. Over the years Zeal has evolved and expanded to become the interbranchiate sports extravaganza in Delhi. Being the most eagerly awaited event of the year, it has become a  platform where the youth of the NIT DELHI get together, interact and indulge in a fair game. Zeal witnesses participation from students from all 3 branches. </p>
<br>
<p>Zeal has always been a classic example of the fact that its the endeavour that counts. Our efforts have always aimed to bring about rise in competition level among the youth, empowering the masses with the torch of social awareness, keeping the grandeur of entertainment and professional shows alive. Zeal brings to the masses a plethora of events, comprising of all major sports, health camps and informal events.</p>
<br>
<p>The Zeal team promises to keep its commitment levels at its peak and provide talent the right push forward with inspiration from renowned sports celebrities,keeping our vision and promise upheld and intact, we proudly and wholeheartedly invite you to be a part of the celebration, Zeal 2017. Grab your seats and jump for ride, Unleash with mind numbing glory… Mayhem For Victory!</p>
<br>
</div>
<p><i><b>ZEAL:Pain is temporary, Pride is forever<b></i></p>
<div class="container-fluid text-center">
<div class="jumbotron">
<h4>Proudly Presented by:<h4>
<p> NIT DELHI</p>
  <a href="https://www.facebook.com/zealnitdelhi/?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>

</div>
</div></div>
</div>
</body>
</html>