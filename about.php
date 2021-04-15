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
			<h1>About Dumbledore’s Tavern</h1>
			<p>Dumbledore’s Tavern was founded on the 30th of March 2020 and was created for Potterheads, magic lovers, muggles and all others that enjoy a good meal and magical atmosphere. <br>
			At Dumbledore’s Tavern you will be surrounded by Harry Potter decorations and the most magical atmosphere you can ever imagine.
			We serve drinks and meals inspired by the francise such as the famous butterbeer, cauldron cakes, pumpkin juice and many more delicious drinks and bites based on your favorite ones from<span id="dots">...</span><span id="more"> the movies and books. <br>
			<br>
			But of course the magic doesn’t stop here, at Dumbledore’s Tavern you can enjoy amazing entertaining activities such as a house sorting at the front desk, a magical workshop where you can learn potions, spells and other fun lessons based on your choice and of course one shouldn’t leave without visiting our magical maze that takes you through the same journey your favorite heroes took. <br>
			<br>
			Before leaving make sure to visit our gifts shop where you can take the magic of Dumbledore’s Tavern and Harry Potter home with you.`<br>
			At Dumbledore’s Tavern we strive to make your visit the most magical one to date! We hope to see you and your magical friends and family soon. <br>
			Love, The Dumbledore Tavern team.
			</p>
			<button onclick="myFunction()" id="myBtn">Read more</button>
		<script>
			function myFunction() {
			  var dots = document.getElementById("dots");
			  var moreText = document.getElementById("more");
			  var btnText = document.getElementById("myBtn");

			  if (dots.style.display === "none") {
			    dots.style.display = "inline";
			    btnText.innerHTML = "Read more";
			    moreText.style.display = "none";
			  } else {
			    dots.style.display = "none";
			    btnText.innerHTML = "Read less";
			    moreText.style.display = "inline";
			  }
			}
		</script>
			<img class="img" src="img/img2.png" alt="img2 not avaliable"/>
			<img class="img3" src="img/img3.png" alt="img3 not avaliable"/>
		</main>
		<?php
			require_once('footer.php');
		?>
		
	</body>
</html>