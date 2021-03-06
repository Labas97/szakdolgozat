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
    <span class="site-heading-lower">Ajándék kereső</span>
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
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="home.php">Főoldal</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="services.php">Ajándék kereső</a>
			<span class="sr-only">(current)</span>
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
<section class="page-section cta" id="sec1">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="bg-faded rounded p-5" style="text-align: center">
                    <p class="mb-0">A jellemzőkre való kereséshez pipálja be a megfelelő négyzeteket:</p><br/>
                    <form action="" method="post">
                        <div class="form-group">
                            <button class="collapsible" type="button">Nem</button>
                            <div class="content">
                                <br/>
                                <table style="width:100%">
                                    <tr>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Férfi</font></label></th>
                                        <th><input type="checkbox" id="male" name="types[]" value="men"></th>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Nő</font></label></th>
                                        <th><input type="checkbox" id="female" name="types[]" value="female"></th>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <br/>
                            <button class="collapsible" type="button">Érdeklődési kör</button>
                            <div class="content">
                                <br/>
                                <table style="width:100%">
                                    <tr>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Elektronika</font></label></th>
                                        <th><input type="checkbox" id="electronic" name="types[]" value="electronic"></th>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Ruha</font></label></th>
                                        <th><input type="checkbox" id="cloth" name="types[]" value="cloth"></th>
                                    </tr>
                                    <tr>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> IT</font></label></th>
                                        <th><input type="checkbox" id="tech" name="types[]" value="tech"></th>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Könyv</font></label></th>
                                        <th><input type="checkbox" id="book" name="types[]" value="book"></th>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <br/>
                            <button class="collapsible" type="button">Életkor</button>
                            <div class="content">
                                <br/>
                                <table style="width:100%">
                                    <tr>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> 20~ éves</font></label></th>
                                        <th><input type="checkbox" id="20yrs" name="types[]" value="20yrs"></th>
                                        <th><label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> 30~ éves</font></label></th>
                                        <th><input type="checkbox" id="30yrs" name="types[]" value="30yrs"></th>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <br/>
                            <input class="btn btn-primary" type="submit" name="search" value="Keresés">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

        <?php
            error_reporting(0);

            if(isset($_POST['search'])) {

                $ServiceController->show();
            }
        ?>

<p id="results"></p>

<button class="scrollToTopBtn"></button>

<footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Lábas Tibor 2020 - University of Miskolc</p>
    </div>
  </footer>

<script>
    //scroll to top ---------
    var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
    var rootElement = document.documentElement

    function handleScroll() {
        var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
        if ((rootElement.scrollTop / scrollTotal ) > 0.10) {
            scrollToTopBtn.classList.add("showBtn")
        } else {
            scrollToTopBtn.classList.remove("showBtn")
        }
    }

    function scrollToTop() {
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);
    document.addEventListener("scroll", handleScroll);

    //collapsible ---------
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>