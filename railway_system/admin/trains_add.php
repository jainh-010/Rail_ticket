<?php 
include('functions.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Train </title>
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
	        		 if($_SESSION['sid'] == "1")
		         		echo ' 
				                <ul class="nav nav-pills">
				                  <li class="nav-item">
				                    <a class="nav-link "  href="index.php"> HOME </a>
				                  </li>
				                  <li class="nav-item">
				                    <a class="nav-link active" aria-current="page" href="trains_add.php"> ADD TRAIN </a>
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
				   		header('location:index.php');
				 }
			else
				header('location:index.php');
 		?>
 	<div> 
 		<form method="post" action="add_train_success.php">
				<table class="" border="0" align="center">
					<th align="center" colspan="2"> Add Train</th>
					<tr> 
						<td>Train No. </td>
						<td> <input type="text" name="tno" required/> </td>
					</tr>
					<tr> 
						<td>Train Name </td>
						<td> <input type="text" name="tname" required/> </td>
					</tr>
					<tr> 
						<td>From </td>
						<td> <input type="text" name="from" required/> </td>
					</tr>
					<tr> 
						<td>To  </td>
						<td> <input type="text" name="to" required/> </td>
					</tr>
					<tr> 
						<td colspan="2" align="center"> 
						<button class="button1" type="submit" name="submit">SUBMIT</button>
						<button class="button1" type="reset">RESET</button>
	    				</td>
	    			</tr>
				</table>
		</form>
	</div>
</body>
</html>