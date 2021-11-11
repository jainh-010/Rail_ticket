<?php
include('connection.php');
if(isset($_POST['submit'])!='')
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];

 #query to check if username and password are correct or not
	$qry = mysqli_query($conn,"select `uname`,`pass`,`uid` from `users` where `uname`='$username' and `pass`='$password'");
	$qry_array = mysqli_fetch_array($qry);
	$rows=mysqli_num_rows($qry);
	echo $qry_array['uid'];
	if($rows!='' )
		{ 
			session_start();
			$_SESSION['sid'] = $qry_array['uid'];
			header('location:index.php');
	}
	
	else
 	header('location:user_login.php?succ=0');
}
?>