
<?php 
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['userSession'])) {
   include_once("logout.php");
   exit;
}

$user_id = $_SESSION["userSession"] ;

$query = $DBcon->query("SELECT * FROM user where user_id= '$user_id'");
$userRow=$query->fetch_array();
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
<input type="button"   value="Add User" onclick="window.location.href='add_user.php'" />
<input type="button"  value="User Details" onclick="window.location.href='user_details.php'" />
<input type="button"   value="View Customer" onclick="window.location.href='###'" />
</div></center>
<footer>
<a href="logout.php?logout" style="text-decoration: none;" >Log out</a><br>
 </footer>      
</form> 
</body>
</html>