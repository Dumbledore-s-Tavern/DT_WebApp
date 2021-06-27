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

			<!-- Plaatjes met nummers en tekst -->
			<div class="menuSlides fade">
				<div class="numbertext">1 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_1.png" alt="Menucart 1">
				<div class="text">Menucard 1</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">2 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_2.png" alt="Menucart 2">
				<div class="text">Menucard 2</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">3 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_3.png" alt="Menucart 3">
				<div class="text">Menucard 3</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">4 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_4.png" alt="Menucart 4">
				<div class="text">Menucard 4</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">5 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_5.png" alt="Menucart 5">
				<div class="text">Menucard 5</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">6 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_6.png" alt="Menucart 6">
				<div class="text">Menucard 6</div>
			</div>
			<div class="menuSlides fade">
				<div class="numbertext">7 / 7</div>
				<img class="img-menu" src="img/menu/Menu_DT_7.png" alt="Menucart 7">
				<div class="text">Menucard 7</div>
			</div>

			<!-- Volgende en terug buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles (Bollentjes) -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>
				<span class="dot" onclick="currentSlide(6)"></span>
				<span class="dot" onclick="currentSlide(7)"></span>
			</div>

			<!-- Script voor sildeshow -->
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

			<!-- De Modal -->
			<div id="myModal" class="modal">
				<!-- Sluiten Knop -->
				<span class="close">&times;</span>

				<!-- Modal Content (Het Plaatje) -->
				<img class="modal-content" id="img01">

				<!-- Modal Caption (Plaatje Tekst) -->
				<div id="caption"></div>
			</div>
			<p>Tap on the menucart for full screen!</p>

			<!-- Script voor modal -->
			<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the images and bind an onclick event on each to insert it inside the modal
			// use its "alt" text as a caption
			var images = document.querySelectorAll(".img-menu");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			for(let i = 0; i < images.length; i++){
			images[i].onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>

			<!-- Handige links: 
			https://www.w3schools.com/howto/howto_js_slideshow.asp
			https://stackoverflow.com/questions/55368866/how-to-create-modal-image-for-multiple-images-inside-a-for-loop
			https://www.w3schools.com/howto/howto_css_modal_images.asp
			-->
		</main>
		<?php
			require_once('footer.php');
		?>
	</body>
</html>