<?php
include('functions.php');
#include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
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
	
			<ul class="nav nav-pills">
				  <li class="nav-item">
				    <a class="nav-link " href="index.php">HOME</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="train_search.php">SEARCH TRAIN</a>
				  </li>
				  <li class="nav-item">
				    <a class ="nav-link" href ="pnr_status.php"> PNR STATUS</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href ="user_register.php">REGISTER </a>
				  </li>
				  <li>
				  	<a class="nav-link" href ="user_login.php">LOGIN </a> 
				  </li>
				  <li>
				  	<a class="nav-link" href ="about.php"> ABOUT</a> 
				  </li>
				</ul>
		<div> 
 
             <?php
				if(isset($_REQUEST["succ"]) !='')
       				{
        				if($_REQUEST["succ"] == "1")
           					 echo "<h4 align='center'> User registered successfully </h4>";
        				else
        					if($_REQUEST["succ"] == "0")
        						echo "<h4 align='center'> Mobile number or username already registered </h4>";
        					else 
	          					echo "<h4 align='center'> Try again </h4>";
    				}
			?>

			<form method="post" action="register_success.php">
				<table border="0" align="center">
					<th align="center" colspan="2"> Registration Form</th>
					<tr> 
						<td>Full name </td>
						<td> <input type="text" name="name" required/> </td>
					</tr>
					<tr> 
						<td>Gender </td>
						<td> <input type="text" name="gender" required/> </td>
					</tr>
					<tr> 
						<td>Phone No</td>
						<td> <input type="text" name="mob" required/> </td>
					</tr>
					<tr> 
						<td>Email id </td>
						<td> <input type="email" name="email" required/> </td>
					</tr>
					<tr> 
						<td>Username </td>
						<td> <input type="text" name="uname" required/> </td>
					</tr>
					<tr> 
						<td>Password </td>
						<td> <input type="password" name="pass" required/> </td>
					</tr>
					<tr> 
						<td>City </td>
						<td> <input type="text" name="city" required/> </td>
					</tr>
					<tr> 
						<td>State </td>
						<td> <input type="text" name="state" required/> </td>
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