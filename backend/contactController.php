<?php 

if (isset($_POST['mail']) && $_POST['mail'] != '') {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "dumbledoretavern@gmail.com";

	$headers = "From: ".$name;
	$headers = "Email: ".$mailFrom;
	$headers = "Message: ".$message;

	mail($mailTo, $subject, $headers);
	header("Location: contact.php?mailsend");
}

?>