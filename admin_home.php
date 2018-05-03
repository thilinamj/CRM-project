
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
<meta charset="utf-8">

</head>

<body>


<form>
<header>
<h3><b>Admin</b></h3>	

</header>
<center>
<input type="button"     value="Add Staff" onclick="window.location.href='add_user.php'" />
<input type="button"  value="Staff Details" onclick="window.location.href='user_details.php'" />
<input type="button"   value="Add Customer" onclick="window.location.href='customer_form.php'" />
<input type="button"   value="View Customer" onclick="window.location.href='admin_customer_panel.php'" />
<input type="button"   value="Mail Box" onclick="window.location.href='mail_box.php'" />
</div></center>
<footer>
<a href="logout.php?logout" style="text-decoration: none;" >Log out</a><br>
<a href="change.php" style="text-decoration: none;" accesskey="p">Change password</a><br>
 </footer>      
</form> 
</body>
</html>