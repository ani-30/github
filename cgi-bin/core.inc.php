<?php
require 'connect.inc.php';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];

function loggedin()
{
	if(isset($_SESSION['email']) && !empty($_SESSION['email']))
		return true;
	else
		return false;
	
}
function validate_checkuser($email)
{
	$query="Select * from regrecord where email='$email'";
	if($query_run=mysql_query($query))
	{
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0)
			return true;
		else
			return false;
	}
	
	
	
	
}
function validate_checkuser1($name,$rollno,$branch)
{
	$query="Select * from regrecord where name='$name' and rollno='$rollno' and branch='$branch'";
	if($query_run=mysql_query($query))
	{
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0)
			return true;
		else
			return false;
	}
	
	
	
}



?>