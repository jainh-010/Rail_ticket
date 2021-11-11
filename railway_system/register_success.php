<?php
include("connection.php");
if(isset($_POST["submit"])!='')
{
	$name= $_POST['name'];
	$gender=$_POST['gender'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$city=$_POST['city'];
	$state=$_POST['state'];
 
 #query to check if username and mobile number is already available or not
	$qry = mysqli_query($conn,"select `uname`,`mob` from `users` where `uname`='$uname' or `mob`='$mob'");
	$qry_array = mysqli_num_rows($qry);
	
	if($qry_array!='' )
		header("location:user_register.php?succ=0");
	else
	{
		mysqli_query($conn,"insert into `users` values('','$name','$gender','$mob','$email','$uname','$pass','$city','$state')");
		header("location:user_register.php?succ=1");		
	}
}
?>