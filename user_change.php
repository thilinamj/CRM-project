<?php 
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['userSession1'])) {
   include_once("logout.php");
   exit;
}

$user_id = $_SESSION["userSession1"] ;

$query = $DBcon->query("SELECT * FROM user where user_id= '$user_id'");
$userRow=$query->fetch_array();		

if(isset($_POST['re_password'])){
		
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$re_pass=$_POST['re_pass'];

$hashed_password = password_hash($re_pass, PASSWORD_DEFAULT);

$user_id = $_SESSION["userSession1"] ;

$chg_pwd = $DBcon->query("SELECT password FROM user WHERE user_id ='$user_id'");

$chg_pwd1=$chg_pwd->fetch_array();

if (password_verify($old_pass, $chg_pwd1['password']))  {

		
if($new_pass==$re_pass){

$hashed_password = password_hash($re_pass, PASSWORD_DEFAULT);

$update_pwd=$DBcon->query("UPDATE user set password='$hashed_password' where user_id='$user_id'");

echo "<script>alert('Update Sucessfully'); window.location='logout.php'</script>";
}
else{
echo "<script>alert('Your new and Retype Password is not match'); window.location='logout.php'</script>";
}
}
else
{
echo "<script>alert('Your old password is wrong'); window.location='logout.php'</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<link rel="stylesheet" href="css/styl.css" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $userRow['position']." :". $userRow['user_id']; ?>   </title>

</head>

<body>

<form method="post" >
<header>
<h3>Admin</h3>
<h2><center>Change Password</center></h2>

</header>


<b>Old Password:</b><br>
<input type="password" name="old_pass" placeholder="Old Password..." value="" required /><br>

<b>New Password:</b><br>
<input type="password" name="new_pass" placeholder="New Password..." value=""  required /><br>

<b>Retype New Password:</b><br>
<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required /><br><br>


<footer>		
<button type="submit" accesskey="r" class="btn" name="re_password" > Submit
</button> 
<input type="button" accesskey="c" value="Cancel" ONCLICK="window.location.href='user_home.php' ""/>
</footer>

</form>
</body>
</html>