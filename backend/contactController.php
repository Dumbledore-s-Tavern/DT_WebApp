<!-- <?php 

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
	header("Location: ../contact.php?mailsend");
}

?> -->



<?php
	//Input (van form)
	$name = $_POST['name'];
	$visitor_mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//Informatie (versturen van mail)
	$email_from = "dumbledoretavern@gmail.com";
	$email_subject = "Nieuwe Mail Dumbledore’s Tavern";
	$email_body = "Je hebt een nieuw bericht van $name \n".
				 "Email: $visitor_mail \n".
				 "Betreft: $subject: \n".
				 "Bericht: $message \n";

	$to = "dumbledoretavern@gmail.com";
	$headers = "From: $email_from \r\n";

	//Stuur de data via email
	mail($to,$email_subject,$email_body,$headers);

	$msg = "Mail is verzonden!";
	header("Location: ../contact.php?msg=$msg");
?>

<!-- 
TODO:
- Toevoegen van een msg wanneer de mail succesvol is verzonden
 -->