<!DOCTYPE html>
<html>
<head>
	<title>Payment Gateway</title>
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
		                    <a class="nav-link active" aria-current="page" href ="user_change_password.php"> CHANGE PASSWORD </a>
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
                  header('location:logout.php');
             ?>
     ?>
     <div class="container my-5">  
     	<h2> MAKE PAYMENT</h2>
     	<hr/>
		<img src="images/pay.jpg">
		<form >
 			<table> 
    			<tr>
    				<td>Card Number</td>
    	 			<td> <input type="text" name="" required />	</td>
    			</tr>
    			<tr>
    				<td>Card Holder's Name</td>
    	 			<td> <input type="text" name="" required/> 	</td>
    			</tr>
    			<tr>
    				<td>Card Type</td>
    	 			<td> <input type="" name="" required /> </td>
    			</tr>
    			<tr> 
    				<td>Card Expiry</td>
    	 			<td> <input type="date" name="" required/> </td>
   				</tr>
    			<tr>
    				<td>CVV Number</td>
    	 			<td> <input type="password" name="" required/> </td>
    			</tr>
    			<tr>
    				<td>Total Amount</td>
    	 			<td> <input type="" name="" required/> </td>
                </tr>
    			<tr>
    				<td colspan="2" align="center">
    				<button class="button1" type="submit">Make payment</button>
					<button class="button1" type="reset">Reset</button>
    				</td>
    			</tr>
 			</table>
		</form>
     </div>
</body>
</html>