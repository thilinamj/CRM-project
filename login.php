<?php
session_start();
require_once 'dbconnect.php';



if (isset($_POST['btn-login'])) {
 
 $user_id = strip_tags($_POST['user_id']);
 $password = strip_tags($_POST['password']);
 
 $user_id = $DBcon->real_escape_string($user_id);
 $password = $DBcon->real_escape_string($password);
 

//select admin

 $query = $DBcon->query("SELECT user_id, email, password,position FROM user WHERE user_id='$user_id' and position='admin'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if id/password are correct returns must be 1 row
 
 if (password_verify($password, $row['password']) && $count==1) {
  $_SESSION['userSession'] = $row['user_id'];

 header("Location: admin_home.php");
}

// select customer service

 $query = $DBcon->query("SELECT user_id, email, password,position FROM user WHERE user_id='$user_id' and position='user'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if id/password are correct returns must be 1 row
 
 if (password_verify($password, $row['password']) && $count==1) {
  $_SESSION['userSession1'] = $row['user_id'];

 header("Location: user_home.php");
}


 else {
  echo "<script>alert('Invalied User Id or Password')</script>";
 }

 $DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>

</head>
<body>

<form class="modal1-content " method="post" >

<header>   
<h2 ><font color="white"><center>Sign In.</center></font></h2>
</header> 

<font color="#004b66">        
<div>
<h2>Welcome</h2>



<input type="text"  placeholder="User Id" name="user_id" required /><br>


<input type="password"  placeholder="Password" name="password" required />

</font>



<button type="submit"  name="btn-login" id="btn-login">Sign In
</button> 
</form>

</body>
</html>