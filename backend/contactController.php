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
	$mailInput = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//Foutafhandeling (als er niks is ingevuld --> laat dan dit zien)
	if(empty($name||$mailInput||$subject||$message))
	{
		echo "It is mandatory to fill in everything!";
		exit;
	}

	//Informatie (versturen van mail)
	$mailTo = "dumbledoretavern@gmail.com";
	$nameFrom = "From:".$name;
	$mailFrom = "Email:".$mailInput;
	$mailSubject = "Subject:".$subject;
	$messageFrom = "From:".$message;

	//Stuur de data via email
	mail($mailTo, $nameFrom, $mailFrom, $mailSubject, $messageFrom);
	header("Location: ../contact.php");
?>

<!-- 
TODO:
- Toevoegen van een msg wanneer de mail succesvol is verzonden
 -->