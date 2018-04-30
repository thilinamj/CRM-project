
<?php 
session_start();
include_once 'dbconnect.php';
/*
if(!isset($_SESSION['userSession'])) {
   include_once("logout.php");
   exit;
}

$user_id = $_SESSION["userSession"] ;

$query = $DBcon->query("SELECT * FROM user where user_id= '$user_id'");
$userRow=$query->fetch_array();*/
$DBcon->close();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>


<form>
<header>
<h3><b>Admin</b></h3>	
<h2><center>User Details</center></h2>
</header>
<center>
<input type="button"  accesskey="1" value="Add User" onclick="window.location.href='###'" />

<input type="button" accesskey="2" value="User Details" onclick="window.location.href='user_details.php'" />
<input type="button" accesskey="3" value="Update User" onclick="window.location.href='update_user_find.php'" />
<input type="button" accesskey="4" value="Delete User" onclick="window.location.href='delete_user_find.php'" />
<input type="button" accesskey="5" value="Reset passwords" onclick="window.location.href='reset_password.php'" />
<input type="button"  accesskey="6" value="View Customer" onclick="window.location.href='###'" />
</div></center>
<footer>
<input type="button" accesskey="b" value="Back" onclick="window.location.href='###'" />
 </footer>      
</form> 
</body>
</html>