<?php require_once('connection/connection.php');?>
 <?php
$first_name='chamith';
$last_name='sandupaama';
$email='manda@gmail.com';
$password='jayakody';
$phone_num='0777454223'; 
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