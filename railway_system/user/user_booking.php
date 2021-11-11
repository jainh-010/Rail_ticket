<?php 
include('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Train Search</title>
      <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0/style.css">
      <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0/css/bootstrap.min.css">
      <script type="text/javascript" src="bootstrap-5.0.0/js/juqery_latest.js"></script>
      <script type="text/javascript" src="bootstrap-5.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
			<h1 align="center"> RAILWAY RESERVATION SYSTEM</h1>
			<hr/>
      	</div>
       <?php
            if(isset($_SESSION['sid'])!='')
            {
              if($_SESSION['sid']!='1')
            
                echo ' 
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="train_search.php"> SEARCH TRAIN </a>
                  </li>
                  <li class="nav-item">
                    <a class ="nav-link " href ="pnr_status.php"> PNR STATUS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href ="user_change_password.php"> CHANGE PASSWORD </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href ="user_account.php"> ACCOUNTS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href ="user_booking.php"> MY BOOKINGS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="logout.php"> LOGOUT  </a>
                  </li>
                  <li  class="nav-item">
                    <a class="nav-link" href ="about.php"> ABOUT </a> 
                  </li>
                </ul> 

                ';
          }
             else
                  header('location:logout.php');
             ?>

</body>
</html>