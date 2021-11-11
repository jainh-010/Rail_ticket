<!DOCTYPE html>
<html lang="en">
<head>
	
  <title>Railway System </title>
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
    session_start();
       if(isset($_SESSION['sid'])!='')
          {  
	         if($_SESSION['sid'] == "1")
		         echo ' 
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"> HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="trains_add.php"> ADD TRAIN </a>
                  </li>
                  <li class="nav-item">
                    <a class ="nav-link" href ="users_list.php"> USERS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="logout.php"> LOGOUT  </a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href ="about.php"> ABOUT</a> 
                  </li>
                </ul> 

                ';
	         else
             echo ' 
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="train_search.php"> SEARCH TRAIN </a>
                  </li>
                  <li class="nav-item">
                    <a class ="nav-link" href ="pnr_status.php"> PNR STATUS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="user_change_password.php"> CHANGE PASSWORD </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="user_account.php"> ACCOUNTS </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="user_booking.php"> MY BOOKINGS </a>
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
          echo ' 
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"> HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="train_search.php"> SEARCH TRAIN </a>
                  </li>
                  <li class="nav-item">
                    <a class ="nav-link" href ="pnr_status.php"> PNR STATUS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href ="user_register.php"> REGISTER </a>
                  </li>
                  <li  class="nav-item">
                  	<a class="nav-link" href ="user_login.php"> LOGIN </a> 
                  </li>
                  <li  class="nav-item">
                  	<a class="nav-link" href ="about.php"> ABOUT </a> 
                  </li>
                </ul> 

                ';
        ?>
</body>
</html>