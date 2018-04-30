<?php require_once('project/connection.php');?>
<?php
$first_name='kalana';
$last_name='koralgedara';
$email='kalana.k2.kk@gmail.com';
$password='k2';
$is_deleted=0;



$hashed_password=sha1($password);
$query="INSERT INTO loginform(first_name, last_name, email, hashed_password,) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}')";

$result=mysqli_query($connection,$query);
if($result){
	echo"1 record added";
}else{
	echo "database query failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection);?>
