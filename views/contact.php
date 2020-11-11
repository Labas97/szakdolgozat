<?php

    session_start();

	require_once '../controllers/server.php';

	$ContactController->contact();

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
    <span class="site-heading-lower">Kapcsolat</span>
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
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="services.php">Ajándék kereső</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Kapcsolat</a>
              <span class="sr-only">(current)</span>
          </li>
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="admin.php">Admin</a>
            </li>
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
  <h4><font color="#e6a756" face="Tahoma, Geneva, sans-serif">Itt küldhet az oldal szerkesztőjének üzenetet/észrevételt/hiba bejelentést/panaszt. Üzenet küldése érvényes e-mail címmel, és néhány személy adat  megadásával lehetséges. Utóbbit bizalmasan kezeljük, csak amiatt szükséges, hogy el tudjuk érni önt, és válaszolhassunk az üzenetére. A "Küldés" gomb lenyomása után visszaigazoló e-mailt kap az ön által megadott e-mail címre.</font></h4>
		<br />
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
			<div class="form-group">
				<label for="name"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Név:* </font><span class="form-text" id="name_error_message"></span></label>
				<input class="form-control" name="name" type="text" required/>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
			<div class="form-group">
				<label for="email"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> E-mail cím:* </font><span class="form-text" id="email_error_message"></span></label>
				<input class="form-control" name="email" type="email"  required/>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
			<div class="form-group">
				<label for="phone"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Telefonszám: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif">(opcionális)</font></span></label>
				<input class="form-control" name="phone" type="text"/>
            </div>
			<div class="form-group">
				<label for="subject"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Tárgy:</font></label><br/>
					<select name="subject" class="form-control">
							<option value="Panasz">Panasz</option>
							<option value="Kérdés">Kérdés</option>
							<option value="Kérelem">Kérelem</option>
							<option value="Észrevétel">Észrevétel</option>
					</select>
			</div>
			<div class="form-group">
				<label for="message"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Üzenet:* </font><span class="form-text" id="message_error_message"></span></label>
				<textarea class="form-control" rows="5" cols="40" minlenght="10" name="message" required></textarea>
				<div class="valid-feedback">Kitöltve.</div>
				<div class="invalid-feedback">Kötelezően kitöltendő</div>
			</div>
				<input class="btn btn-primary" type="submit" value="Küldés">
		</form>
		</div>
            </div>
        </div>
    </div>
    </div>
</section>
		<br/><br/>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Lábas Tibor 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script>$("#commentForm").validate();</script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>