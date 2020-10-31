<?php

    session_start();

	require_once '../controllers/server.php';

?>

<!DOCTYPE html>
<html lang="hu">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kezdőlap</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body style="background-image: url('img/background.jpg');">

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3" style="color: black!important;">VanEgyÖtletem.Hu</span>
    <span class="site-heading-lower">Főoldal</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">VanEgyÖtletem.Hu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="home.php">Főoldal</a>
			<span class="sr-only">(current)</span>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="services.php">Ajándék kereső</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Kapcsolat</a>
          </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="admin.php">Admin</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

<br/>
<br/>
<br/>
<!-- Slideshow container -->
<div class="slideshow-container" style="text-align:center">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="img/products-01.jpg" alt="prod1" width="100%" height="500">
  </div>

  <div class="mySlides fade">
    <img src="img/products-02.jpg" alt="prod2" width="100%" height="500">
  </div>

  <div class="mySlides fade">
    <img src="img/products-03.jpg" alt="prod3" width="100%" height="500">
  </div>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

    <section class="page-section clearfix">
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="intro">
	<div id="section1">
	<br/>
	<br/>
  <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="Funny">
	</div>
	<div class="intro-text left-0 text-center bg-faded p-5 rounded">
	<br/>
	<br/>
	<h2 class="section-heading mb-4"><font color="#e6a756">Bemutatkozás</font></h2>
  <p class="mb-3"><font>Szeretjük megoldani az előttünk álló feladatokat, kihívásnak tekintjük munkánkat, azt a folyamatot, ahogy ügyfeleink egyedi igényeit alapul véve hatékony webes rendszereket készíthetünk.</font></p>
	</div>
    </div>
</div>
</div>
    </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Lábas Tibor 2020</p>
    </div>
  </footer>
  
  <script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>