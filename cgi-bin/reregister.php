<?php

require 'core.inc.php';
require 'connect.inc.php';
$email=$_SESSION['email'];
$query="select * from regrecord where email='$email'";


	if($query_run=mysql_query($query))
	{
	
		$name=mysql_result($query_run,0,'Name');
		$roll=mysql_result($query_run,0,'Rollno');
		$branch=mysql_result($query_run,0,'Branch');
		$password=mysql_result($query_run,0,'Password');
		$sex=mysql_result($query_run,0,'Sex');
	    $no=count($_POST['sports']);
		$no1=0;
		$query1="delete from regrecord where email='$email'";
		if(!isset($_POST['sports']))
	{
		echo "<script>alert('plz select atleast any 1 sport')</script>";
		include 'reregister.php';
	}
	else
	{
		if ($query1_run=mysql_query($query1))
		{
			foreach($_POST['sports'] as $selected) 
		{
			$query="insert into regrecord values ('$name','$roll','$email','$password','$sex','$branch','$selected')";
		if($query_run=mysql_query($query))
		{
			$no1++;	
		}
		
		}
		
		}
		if($no1==$no)
		{
			echo "<script>alert('YOU R Finally REregistered with $no games ')</script>";
			include 'index.php';
		}
		
		
		
		
		
	}

	}











?>