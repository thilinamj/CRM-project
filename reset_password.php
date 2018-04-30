<?php
session_start();
require_once 'dbconnect.php';
/*
if(!isset($_SESSION['userSession'])) {
include_once("logout.php");
exit;
}


$user_id = $_SESSION["userSession"] ;

$query = $DBcon->query("SELECT * FROM user where user_id= '$user_id'");
$userRow=$query->fetch_array();
*/
if (isset($_POST['btn-view'])) {
 
 $user_id = strip_tags($_POST['user_id']);
 $user_id = $DBcon->real_escape_string($user_id);

 $query = $DBcon->query("SELECT * FROM user WHERE user_id='$user_id' ");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; 
 
 if ( $count==1) {
  $_SESSION['userSession3'] = $row['user_id'];

 header("Location: reset.php");
}
 else {
echo "<script>alert('Invalied User Id ')</script>";
 }
 $DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin :<?php echo  $userRow['user_id']; ?></title>

<body>

   
<form  method="post" id="view-form">

<header>
<h3>Admin</h3>      
<h2 ><center>Reset Users' Password</center></h2>
</header>

<br>
<b>User Id:</b>
<input type="text"  placeholder="User Id" name="user_id" required />

<footer>       
<button type="submit" accesskey="e" name="btn-view" id="btn-view">
&nbsp; Enter
</button>  
<input type="button" accesskey="c" value="Cancel" onclick="window.location.href='admin_home.php?back'" />
</footer>
</form>  
</body>
</html>