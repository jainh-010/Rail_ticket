<?php
function admin()
{
	$menu = '<div class ="">
	        <table border="0" cellpadding="10px">
	           <tr>
	           <td> <a href ="index.php">HOME </a></td> 
	           <td> <a href ="trains_add.php">ADD TRAIN </a></td>
	           <td> <a href ="users_list.php">USERS </a></td>
	           <td> <a href ="logout.php">LOGOUT </a></td>
	           <td> <a href =""> </a></td>
	           </tr>
	        </table>';
	 return $menu; 

}
function non_users()
{
	$menu = '<div class ="">
	        <table border="0" cellpadding="10px">
	           <tr>
	           <td> <a href ="index.php"> HOME</a></td>
	           <td> <a href ="train_search.php">SEARCH TRAIN </a></td>
	           <td> <a href ="pnr_status.php"> PNR STATUS</a></td> 
	           <td> <a href ="user_register.php">REGISTER </a> </td>
	           <td> <a href ="user_login.php">LOGIN </a> </td>
	           <td> <a href ="about.php"> ABOUT</a> </td>
	           </tr>
	        </table>';
 return $menu; 
}

function users()
{
$menu = '<div class ="">
	        <table border="0" cellpadding="10px">
	           <tr>
	           <td> <a href ="index.php">HOME </a></td>
	           <td> <a href ="train_search">SEARCH TRAIN </a></td>
	           <td> <a href ="user_account.php"> ACCOUNTS</a></td>
	           <td> <a href ="pnr_status.php"> PNR STATUS </a></td>
	           <td> <a href ="user_change_password.php"> CHANGE PASSWORD</a></td>
	           <td> <a href ="user_booking.php"> MY BOOKINGS </a></td>
	           <td> <a href ="logout.php">LOGOUT </a></td>
	           <td> <a href ="about.php"> ABOUT </a></td>
	           </tr>
	        </table>';
	    return $menu; 
}  
?>