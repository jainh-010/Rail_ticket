<?php
include('connection.php');
session_start();
if(isset($_SESSION["sid"])!='')
   {
   	echo $_SESSION['sid'];
   	if($_SESSION["sid"]=="1")
     header('location:index.php');
   else
   	header('location:index.php');
   }
?>