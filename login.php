<?php require_once('connection/connection.php');?>
 <?php
$first_name='sunil';
$last_name='liyanage';
$email='sunil@gmail.com';
$password='gamage';
$phone_num='0757885552'; 
$position='staff';

$hashed_password=sha1($password);


$query="INSERT INTO loginform(first_name, last_name, email, password,phone_num,position) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}','{$phone_num}','{$position}')";

$result=mysqli_query($connection,$query);
if($result){
	echo"1 record added";
}else{
	echo "database query failed";
}
?>
<?php mysqli_close($connection);?>