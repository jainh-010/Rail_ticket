<?php
include('connection.php');
if(isset($_POST['submit'])!='')
{
	$name= $_POST['name'];
	$gender=$_POST['gender'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$city=$_POST['city'];
	$state=$_POST['state'];
 
 #query to check if username and mobile number is already available or not
	$qry = mysqli_query($conn,"select `uname`,`mob` from `users`");
	$qry_array = mysqli_fetch_array($qry);
	if($username==$qry_array["uname"] or $mob ==$qry_array["mob"] )
		header("location:register.php?succ=0");
	else
	{
		$insert_query = mysqli_query($conn,"insert into `users` values ('','$name','$gender','$mob','$email','$uname','$pass','$city','$state')");
		header('location:register.php?succ=1');		
	}
}
?>