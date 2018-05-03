<?php 
session_start();
require_once 'dbconnect.php';

if(!isset($_SESSION['userSession'])) {
include_once("logout.php");
exit;
}
		$id=$_POST['userId'];
		print_r($id);

$se="SELECT * FROM user WHERE user_id = $id";
$quer=mysqli_query($DBcon,$se);
$we=mysqli_fetch_array($quer);

?>
<form method="post" >
<b>First Name:</b><br>
<input type="text" name="name" class="txtField"  value="<?php echo $we['first_name']; ?>"><br>

<b>Last Name:</b><br>
<input type="text" name="name1" class="txtField"  value="<?php echo $we['last_name']; ?>"><br>

<b>E-mail:</b><br>
<input type="email" name="email" class="txtField"  value="<?php echo $we['email']; ?>"><br>

<b>Phone Number:</b><br>
<input type="text" name="phone" class="txtField"  value="<?php echo $we['phone_num']; ?>"><br>

<b>Position:</b>
<br>
<input type="radio" class="txtField"  name="position" value="admin" value="<?php echo $we['position']; ?>" >  Admin<br>
<input type="radio" class="txtField"  name="position" value="user" value="<?php echo $we['position']; ?>" > User<br>
<input type="hidden" name="userId" value="<?php echo $id; ?>">

<input type="submit" name="update" value="Update">
</form>

<?php 
if (isset($_POST['update'])) {
	$Fname=$_POST['name'];
	$Lname=$_POST['name1'];
	$email=$_POST['email'];
	$phone_num=$_POST['phone'];
	$position=$_POST['position'];
	$id=$_POST['userId'];

	$inq="UPDATE user set first_name='$Fname' , last_name='$Lname', email='$email', phone_num='$phone_num', position='$position' WHERE user_id='$id'";
	$updquery=mysqli_query($DBcon,$inq);
	 if ($updquery) {
	 	echo "Updated Success";
	 }else{
	 	echo "Can not update";
	 }
}
?>
