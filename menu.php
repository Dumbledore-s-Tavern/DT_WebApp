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
				<img id="slide1" src="img/menu/Menu_DT_1.png" alt="Menucart 1" style="width:100%">
				<div class="text">Menucart 1</div>
			</div>
			
			<div class="menuSlides fade">
				<div class="numbertext">2 / 7</div>
				<img id="slide2" src="img/menu/Menu_DT_2.png" alt="Menucart 2" style="width:100%">
				<div class="text">Menucart 2</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">3 / 7</div>
				<img id="slide3" src="img/menu/Menu_DT_3.png" alt="Menucart 3" style="width:100%">
				<div class="text">Menucart 3</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">4 / 7</div>
				<img id="slide4" src="img/menu/Menu_DT_4.png" alt="Menucart 4" style="width:100%">
				<div class="text">Menucart 4</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">5 / 7</div>
				<img id="slide5" src="img/menu/Menu_DT_5.png" alt="Menucart 5" style="width:100%">
				<div class="text">Menucart 5</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">6 / 7</div>
				<img id="slide6" src="img/menu/Menu_DT_6.png" alt="Menucart 6" style="width:100%">
				<div class="text">Menucart 6</div>
			</div>

			<div class="menuSlides fade">
				<div class="numbertext">7 / 7</div>
				<img id="slide7" src="img/menu/Menu_DT_7.png" alt="Menucart 7" style="width:100%">
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
			<!-- Handige links: https://www.w3schools.com/howto/howto_js_slideshow.asp -->
			
			<!-- Modal test -->

			<!-- The Modal -->
			<div id="myModal" class="modal">
				<!-- The Close Button -->
				<span class="close">&times;</span>

				<!-- Modal Content (The Image) -->
				<img class="modal-content" id="img01">

				<!-- Modal Caption (Image Text) -->
				<div id="caption"></div>
			</div>

			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide1");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide2");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide3");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide4");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide5");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide6");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("slide7");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			modal.style.display = "none";
			}
			</script>
			
		</main>
		<?php
			require_once('footer.php');
		?>
	</body>
</html>