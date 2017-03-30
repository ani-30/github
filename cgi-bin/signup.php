<?php 

require 'core.inc.php';
require 'connect.inc.php';
if(isset($_POST['name']) && isset($_POST['rollno']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['sex']) && isset($_POST['branch']))
{
	
   $name=$_POST['name'];
	$rollno=$_POST['rollno'];
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	$sex=$_POST['sex'];
 	$branch=$_POST['branch'];
	if(!isset($_POST['sports']))
	{
		echo "<script>alert('plz select atleast any 1 sport')</script>";
		include 'signup.html';
	}
	else
	{
 $no=count($_POST['sports']);


$no1=0;
if(!empty($name) && !empty($rollno) && !empty($email) && !empty($password) && !empty($sex) && !empty($branch))
{
	if(validate_checkuser($email) && validate_checkuser1($name,$rollno,$branch) )
	{
        foreach($_POST['sports'] as $selected) 
		{
			$query="insert into regrecord values ('$name','$rollno','$email','$password','$sex','$branch','$selected')";
		if($query_run=mysql_query($query))
		{
			$no1++;	
		}
		
		}
	}
	else
	{
		echo "<script>alert('YOU R already registered with the given email id or with same student deatails ')</script>";
	}
		if($no1==$no)
		{
			echo "<script>alert('YOU R Finally registered with $no games ')</script>";
			include 'index.php';
		}
		else
		{
			echo "<script>alert('YOU R not registered with $no games ')</script>";
		}
}
else
{
	echo "<script>alert('you are required to enter all th details')</script>";
    include 'signup.html';

}
	}

}







?>