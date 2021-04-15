<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "dumbledoretavern@gmail.com";
	$headers = "From: ".$mailFrom;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>