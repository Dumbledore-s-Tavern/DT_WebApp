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
			<h1>Menu</h1><br>
			<h2>Look here for our magical menu!</h2><br>

			<!-- Slideshow container -->
			<div class="slideshow-container">

			<!-- Full-width images with number and caption text -->
			<div class="menuSlides fade">
				<div class="numbertext">1 / 7</div>
				<img src="img/menu/Menu_DT_1.png" style="width:100%">
				<div class="text">Menucart 1</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">2 / 7</div>
				<img src="img/menu/Menu_DT_2.png" style="width:100%">
				<div class="text">Menucart 2</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">3 / 7</div>
				<img src="img/menu/Menu_DT_3.png" style="width:100%">
				<div class="text">Menucart 3</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">4 / 7</div>
				<img src="img/menu/Menu_DT_4.png" style="width:100%">
				<div class="text">Menucart 4</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">5 / 7</div>
				<img src="img/menu/Menu_DT_5.png" style="width:100%">
				<div class="text">Menucart 5</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">6 / 7</div>
				<img src="img/menu/Menu_DT_6.png" style="width:100%">
				<div class="text">Menucart 6</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">7 / 7</div>
				<img src="img/menu/Menu_DT_7.png" style="width:100%">
				<div class="text">Menucart 7</div>
			</div>

			<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>
				<span class="dot" onclick="currentSlide(6)"></span>
				<span class="dot" onclick="currentSlide(7)"></span>
			</div>

			<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			showSlides(slideIndex = n);
			}

			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("menuSlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			}
			</script>
			<!-- Handige links: https://www.w3schools.com/howto/howto_js_slideshow.asp -->
			
		</main>
		<?php
			require_once('footer.php');
		?>
	</body>
</html>