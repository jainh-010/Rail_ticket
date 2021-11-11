<?php 
include('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pnr Status</title>
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
                    <a class ="nav-link active" aria-current="page" href ="pnr_status.php"> PNR STATUS </a>
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
                    <a class="nav-link " href="index.php"> HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="train_search.php"> SEARCH TRAIN </a>
                  </li>
                  <li class="nav-item">
                    <a class ="nav-link active" aria-current="page" href ="pnr_status.php"> PNR STATUS</a>
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
          
   <div> 
       <form method="" action="">
       	<table align="center"> 
          <thead align="center"> 
             <tr >  
                <th colspan="2" align="center">Check PNR status </th>
             </tr>
          </thead>
          <tbody>
             <tr>  
             	<td>PNR </td>
             	<td> <input type="text" name="pnr" required> </td>
             </tr>
             <tr> 
             	<td colspan="2" align="center"> 
             		<button class="button1" type="submit">SUBMIT</button>     
             		<button class="button1" type="reset">RESET</button> </td>
             	</tr>
          </tbody>
       	</table>
        </form>
   </div>
</body>
</html>