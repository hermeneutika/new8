<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
 <!-- <link rel="stylesheet" href="css/style.css" /> -->
  <link rel="stylesheet" href="css/style-slide.css" /> 
	
=======
  <link rel="stylesheet" href="css/style.css" />
>>>>>>> 21f3a8589c41f190292e35500568fced0fd220d9
	
  <title>Document</title>
</head>
<body>
<<<<<<< HEAD
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slideshow/1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slideshow/2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slideshow/3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
</br>

=======

<!--
  <ul class="carousel">

  <li class="carousel1"><div class="content">Item 1</div></li>
  <li class="carousel1"><div class="content">Item 2</div></li>
  <li class="carousel1"><div class="content">Item 3</div></li>
  <li class="carousel1"><div class="content">Item 4</div></li>
  <li class="carousel1"><div class="content">Item 5</div></li>
  <li class="carousel1"><div class="content">Item 6</div></li>



  </ul>
-->
  <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto-->
<!--<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>
-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"><!--1 / 3--></div>
  <img src="slideshow/1.jpg" style="width:25%">
  <div class="text"><!--Caption Text--></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"><!--2 / 3--></div>
  <img src="slideshow/2.jpg" style="width:25%">
  <div class="text"><!--Caption Two--></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"><!--3 / 3--></div>
  <img src="slideshow/3.jpg" style="width:25%">
  <div class="text"><!--Caption Three--></div>
</div>

</div>
<br>
>>>>>>> 21f3a8589c41f190292e35500568fced0fd220d9

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<<<<<<< HEAD



=======
</body>
</html> 
>>>>>>> 21f3a8589c41f190292e35500568fced0fd220d9
</body>
</html>