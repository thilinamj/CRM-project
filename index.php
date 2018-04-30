<?php session_start();?>
<?php require_once('connection/connection.php');?>
 <?php
 //check the form submission
if(isset($_POST['submit'])){
	$errors=array();
//check the user name and password enter
	if(!isset($_POST['id']) || strlen(trim($_POST['id'])) <1){
		$errors[]='User name is missing/invalid';
	}

if(!isset($_POST['password']) || strlen(trim($_POST['password'])) <1){
		$errors[]='password is missing/invalid';
	}
//check there are any errors in the form
	if (isset($errors)) {
//save user name and password in to the variabeles
      $id=mysqli_real_escape_string($connection,$_POST['id']);
      $password=mysqli_real_escape_string($connection,$_POST['password']);
      $hashed_password= sha1($password);
		
	//prepare database query
	$query="SELECT * FROM loginform WHERE id='{$id}' AND password='{$hashed_password}' LIMIT 1";

	$result_set=mysqli_query($connection,$query);

	if($result_set){
		//query succesful;

		if(mysqli_num_rows($result_set)==1){
			//valid user found
			$user=mysqli_fetch_assoc($result_set);
			$_SESSION['user_id']=$user['id'];
			$_SESSION['first_name']=$user['first_name'];
			//redirect to user.php
			header('Location:users.php');
		}else 
		//user name and password invalid
		$errors[]='invalid username/password ';
	} else {
		$errors[]='Database query faild';
	}	
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Log In- CRM Management</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
<div class="login">

	<form action="index.php" method="post"> 

	<fieldset>

		<legend><h1> Log In</h1></legend>
		<?php 
			if(isset($errors) && !empty($errors)){
				echo '<p class="error"> Invalid username/password </p>';
			}
		?>
<p>
	<label for="">Username:</label>
	<input type="text" name="id" id="" placeholder="ID">
</p>
<p>
	<label for="">Password:</label>
	<input type="Password" name="password" id="" placeholder="Password">
</p>
<p>
	<button type="submit" name="submit">Log in</button>
</p>
	</fieldset>
	</form>
</div>
</body>
</html>
<?php mysqli_close($connection);?>