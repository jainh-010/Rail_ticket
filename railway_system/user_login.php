<?php
include('functions.php');
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
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
		    <a class="nav-link " href="train_search.php">SEARCH TRAIN</a>
		  </li>
		  <li class="nav-item">
		    <a class ="nav-link" href ="pnr_status.php"> PNR STATUS</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href ="user_register.php">REGISTER </a>
		  </li>
		  <li>
		  	<a class="nav-link active" aria-current="page" href ="user_login.php">LOGIN </a> 
		  </li>
		  <li>
		  	<a class="nav-link" href ="about.php"> ABOUT</a> 
		  </li>
		</ul>
	
       <section> 
       	 	<div> 
				<?php
	 				if(isset($_REQUEST["succ"])!='')
       					 if( $_REQUEST["succ"] == "0")
            				echo "<h4 align='center'> Login failed <br/> Either username or password is incorrect.</h4> <br/>";
				?>
       	 	</div>
       </section>


		<div> 	
		<form method="post" action="user_login_success.php">
			<table border="0" align="center">
				<thead align="center"> 
					<tr> <th><h3>  Login/Sign-Up </h3> </thead> </th> </tr>
				<tbody> 
				<tr> <td> 
				<div class="form-floating mb-3">
					  <input type="" class="form-control" id="floatingInput" placeholder="name@example.com" name="uname">
					  <label for="floatingInput">Email address</label>
					</div>
					<div class="form-floating">
					  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
					  <label for="floatingPassword">Password</label>
				</div>
				</td>
				</tr>
				<td colspan="2" align="center"> 
				<button class="button1" type="submit" name="submit">Submit</button>
				<button class="button1" type="reset">Reset</button>
			    </td></tr>
			    <tr> 
			    	<td colspan="2" align="center"><a href="user_register.php">Click here to rgister </td></tr>
				</tbody>
			</table>
		</form>
			</div>

			

</body>
</html>