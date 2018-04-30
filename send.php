<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
		if(!empty($name) && !empty($email) && !empty($comment)){
			$to = $email;
			$title = "Test message";
			$content = $name."\n".$comment;
			$header = "From:abc@@test.com";

		if(mail($to, $title, $content, $header)){
			echo "Your contact form has been send successfuly.";
		}else{
			echo "Your contact form has been send successfuly.";
		}

		}else{
			echo "Please fill all fields.";
		}
}

?>

<div align="center">
<form action="send.php" method="POST">
	Name <br><input type="text" name="name" maxlength="20"> <br> <br>
	Email <br> <input type="text" name="email" maxlength="50"> <br> <br>
	Comment <br> <textarea rows="10" cols="25" name="comment" maxlength="1000"></textarea> <br> <br>
	<input type="submit" value="Send">

</form>
</div>
