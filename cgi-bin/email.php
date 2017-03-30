<?php 



require 'core.inc.php';
require 'connect.inc.php';
include 'email.html';
if(isset($_POST['email']))
{
	$email=$_POST['email'];
    if(!empty($email))
	if(!validate_checkuser($email))
		{
		
		$query2="Select * from regrecord where email ='$email'";
		
		if($query_run2=mysql_query($query2))
		{
			
			$pass=mysql_result($query_run2,0,'Password');
		
		}
		$msg ="Your password :"." $pass";
		
		$mail=mail($email, "Subject: ZEAL_LOGIN",$msg);
if($mail){
 echo "<script>alert('success')</script>";
  }else{
 echo "<script>alert('failed')</script>"; 
  }
		echo "<script>alert('Your password has been sent to your registered mail id check in there for password') </script>";
		
}
else
{
	
	echo "<script>alert('You are not registered yet') </script>";
     
}
}









?>