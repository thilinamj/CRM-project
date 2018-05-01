<?php require_once('connection/dbconnect.php');?>
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