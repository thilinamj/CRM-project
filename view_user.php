
<?php 
session_start();
include_once 'dbconnect.php';

/* if(!isset($_SESSION['userSession'])) {
   include_once("logout.php");
   exit;
}

$user_id = $_SESSION["userSession"] ;*/

$query = $DBcon->query("SELECT * FROM user WHERE user_id =".$_SESSION['userSession3']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

<form >
<header>
<h3>Admin</h3>  
<h2 ><center>User Details</center></h2>
</header>	



<table>
<tr>
<td><font color="#004b66">User ID</font></td>
<td><?php echo ":". $userRow['user_id']; ?></td>
</tr>

<tr>
<td><font color="#004b66">User Name</font></td>
<td><?php echo ":". $userRow['first_name']."&nbsp". $userRow['last_name']; ?></td>
</tr>

<tr>
<td><font color="#004b66">E-Mail</font></td>
<td><?php echo ":". $userRow['email']; ?></td>
</tr>

<tr>
<td><font color="#004b66">Phone Number</font></td>
<td><?php echo ":". $userRow['phone_num']; ?></td>
</tr>

<tr>
<td><font color="#004b66">Position</font></td>
<td><?php echo ":". $userRow['position']; ?></td>
</tr>
</table>


<footer>
<input type="button" accesskey="b" value="Back" onclick="window.location.href='admin_home.php?back'" />
</footer>

</form>               
</body>
</html>