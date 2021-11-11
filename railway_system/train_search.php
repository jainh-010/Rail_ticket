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
                    <a class="nav-link active" aria-current="page" href="train_search.php"> SEARCH TRAIN </a>
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
                    <a class="nav-link " href="index.php"> HOME </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="train_search.php"> SEARCH TRAIN </a>
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
 <div>
 	<form action="" method="post">
 		<table class="">
 			<thead align="center"> 
          <tr> <th colspan="2"> Search train for your journey</thead></th></tr>
        <tbody> 
 			<tr> 
 				<td> FROM </td>
 				<td> 
          <input list="stations" name="from" id="">
            <datalist id="stations">
              <option value="Bikaner">
              <option value="Delhi">
              <option value="Jaipur">
              <option value="Jodhpur">
              <option value="Surat">
              <option value="Ambala">
              <option value="Barmer">
              <option value="Surat">
              <option value="Ahemdabad">
              <option value="Hubli">
              <option value="Devangere">
            </datalist>
          </td>
 			</tr>
 			<tr>
 				<td>TO</td>
 				<td> 
          <input list="stations" name="to" id="">
            <datalist id="stations">
              <option value="Bikaner">
              <option value="Delhi">
              <option value="Jaipur">
              <option value="Jodhpur">
              <option value="Surat">
              <option value="Ambala">
              <option value="Barmer">
              <option value="Surat">
              <option value="Ahemdabad">
              <option value="Hubli">
              <option value="Devangere"> 
            </datalist>
 			</tr>
 			<tr>
 				<td> DATE </td>
 				<td> <input type="date" name=""> </td>
 			</tr>
 			<tr>
 			<td colspan="2" align="center"> 
       		<button class="button1" type="submit">SUBMIT</button>     
       		<button class="button1" type="reset">RESET</button> 
       	</td>
 			</tr>
    </tbody>
 		</table>
 	</form>
 </div>
</body>
</html>