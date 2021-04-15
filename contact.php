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
			<h2>Send e-mail to dumbledoretavern@gmail.com</h2>
			<form class="contact-form" action="backend/contact-form.php" method="post">
				<input type="text" name="name" placeholder="Full name"><br>
				<input type="text" name="mail" placeholder="Your e-mail"><br>
				<input type="text" name="subject" placeholder="Subject"> <br>
				<textarea name="message" placeholder="Message"></textarea><br>
				<button type="submit" name="submit">Send</button><br>
			</form>
			<h4>
			Email: dumbledoretavern@gmail.com</h4>
			<br>
			<h4>(without Covid-19) <br>
			Visiting hours restaurant:<br>
			Monday until Friday: <br>
			Open: 12:00 <br>
			Closed: 20:00 <br>
			Weekend: <br>
			Open: 13:00 <br>
			Closed: 00:00 <br>
			Visiting hours maze: <br>
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