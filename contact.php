<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dumbledore’s Tavern - Imagine the impossible!</title>
		<?php require_once 'head.php'; ?>
	</head>
	<body>
		<?php
			require_once('header.php');
		?>
		<main>
			<h1>Contact</h1> <br>
			<h2>Send e-mail to dumbledoretavern@gmail.com</h2><br>
			<form class="contact-form" action="./backend/contactController.php" method="post">
				<input type="text" name="name" placeholder="Full name"><br>
				<input type="text" name="mail" placeholder="Your e-mail"><br>
				<input type="text" name="subject" placeholder="Subject"> <br>
				<textarea name="message" placeholder="Message"></textarea><br>
				<button class="submit" type="submit" name="submit">Send</button><br>
			</form><br>
			<h2>Visiting hours restaurant (without Covid-19):</h2><br>
			<h4>
			Monday until Friday: <br>
			Open: 12:00 <br>
			Closed: 20:00 <br>
			Weekend: <br>
			Open: 13:00 <br>
			Closed: 00:00 <br>
			</h4><br>
			<h2>Visiting hours maze (without Covid-19):</h2>
			<br><h4>
			Monday until Thursday: <br>
			Open: 12:00 <br>
			Closed: 20:00 <br>
			Friday until Sunday: <br>
			Open: 12:00 <br>
			Closed: 22:00 <br>
			</h4>
		</main>
		<?php
			require_once('footer.php');
		?>
	</body>
</html>