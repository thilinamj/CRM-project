<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="button" accesskey="c" value="Back" ONCLICK="window.location.href='admin_home.php' ""/>

<?php
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['userSession'])) {
include_once("logout.php");
exit;
}

$user_id = $_SESSION["userSession"] ;

$query = $DBcon->query("SELECT * FROM user where user_id= '$user_id'");
$userRow=$query->fetch_array();


$query = $DBcon->query("SELECT * FROM customer  ");
$row= $query->fetch_assoc();
$DBcon->close();

?>



<form method="post" action="admin_customer_panel.php">
<input type="text" name="user_id" class="txtField" value="<?php echo $row['id']; ?>">
</form>
</body>
</html>