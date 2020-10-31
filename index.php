<?php

    session_start();

    define('SERVER_ROOT', './');

    define('SITE_ROOT', 'http://localhost/vanegyotletem/server.php');

    require_once(SERVER_ROOT . 'modells/' . 'db.php');

?>

<!DOCTYPE html>
<html lang="hu">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kezdőlap</title>
  <link rel="stylesheet" type="text/css" href="views/css/style.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="views/css/business-casual.min.css" rel="stylesheet">

</head>

<body style="background-image: url('views/img/background.jpg');">

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3" style="color: black!important;">VanEgyÖtletem.Hu</span>
    <span class="site-heading-lower">Válassz egy menüpontot</span>
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
            <a class="nav-link text-uppercase text-expanded" href="views/home.php">Főoldal</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="views/services.php">Ajándék kereső</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="views/contact.php">Kapcsolat</a>
          </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="views/admin.php">Admin</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="bg-faded rounded p-5" style="text-align: center">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Miskolci Egyetem</span>
              <span class="section-heading-lower">Lábas Tibor</span>
            </h2>
            <p class="mb-0">Üdvözlöm! Jelenleg Lábas Tibor Bence (O4W05U) Programtervező informatikus (BSc), szakdolgozatához készített weboldalán tartózkodik.<br/>Az oldal tartalma még hiányos, türelmét kérjük...
              <div class="windows8" style="top: -22px; float: right; left: -150px;">
                  <div class="wBall" id="wBall_1">
                      <div class="wInnerBall"></div>
                  </div>
                  <div class="wBall" id="wBall_2">
                      <div class="wInnerBall"></div>
                  </div>
                  <div class="wBall" id="wBall_3">
                      <div class="wInnerBall"></div>
                  </div>
                  <div class="wBall" id="wBall_4">
                      <div class="wInnerBall"></div>
                  </div>
                  <div class="wBall" id="wBall_5">
                      <div class="wInnerBall"></div>
                  </div>
              </div></p>
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

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>