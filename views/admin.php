<?php

    session_start();

    require_once '../controllers/server.php';

    $AdminController->append();

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

    <script>
        $(document).ready(function(){
            $(".toast").toast("show");
            $("#myToast").toast({ delay: 3000 });
        });
    </script>

</head>

<body style="background-image: url('img/background.jpg');">

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3" style="color: black!important;">VanEgyÖtletem.Hu</span>
    <span class="site-heading-lower">Admin felület</span>
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
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="contact.php">Kapcsolat</a>
                </li>
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="admin.php">Admin</a>
                    <span class="sr-only">(current)</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

    global $conn;

    error_reporting(0);

    if (isset($_POST["email"]) && !empty($_POST["email"])) {

        $Email = $_POST["email"];

    }

    if (isset($_POST["password"]) && !empty($_POST["password"])) {

        $Password = $_POST["password"];

    }

    $result = $conn->query("SELECT * FROM logins WHERE email = '$Email' AND password = '$Password'");

    $row = mysqli_fetch_array($result);

    if (((isset($_POST['login'])) && ($row['email'] == $Email && $row['password'] == $Password)) || (isset($_SESSION["mail"]))) {

        if($Email) {

            $_SESSION["mail"] = $Email;

        }

        echo '<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="bg-faded rounded p-5" style="text-align: center">
                            <h4><font color="#e6a756" face="Tahoma, Geneva, sans-serif">Új ötlet hozzáadása:</font></h4>
                            <br />
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Név: </font><span class="form-text" id="email_error_message"></span></label>
                                    <input class="form-control" name="name" type="text"  required/>
                                </div>
                                <div class="form-group">
                                    <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Ár: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label>
                                    <input class="form-control" name="price" type="text" required/>
                                </div>
                                    <div class="form-group">
                                        <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> URL: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label>
                                        <input class="form-control" name="url" type="text" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Típusok (vesszővel elválasztva): </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label>
                                        <input class="form-control" name="types" type="text" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Leírás: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label>
                                        <textarea class="form-control" name="description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Kép: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label><br/>
                                    <input class="btn btn-light" type="file" name="fileToUpload" id="fileToUpload" required/>
                                    </div>
                                    <input class="btn btn-primary" type="submit" name="append" value="Hozzáad">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>';
    }

     else {

        echo '<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="bg-faded rounded p-5" style="text-align: center">
                    <h4><font color="#e6a756" face="Tahoma, Geneva, sans-serif">Admin belépés:</font></h4>
                    <br />
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> E-mail cím: </font><span class="form-text" id="email_error_message"></span></label>
                            <input class="form-control" name="email" type="email"  required/>
                            <div class="valid-feedback">Kitöltve.</div>
                            <div class="invalid-feedback">Kötelezően kitöltendő</div>
                        </div>
                        <div class="form-group">
                            <label for="password"><font color="#e6a756" face="Tahoma, Geneva, sans-serif"> Jelszó: </font><span><font color="#e6a756" face="Tahoma, Geneva, sans-serif"></font></span></label>
                            <input class="form-control" name="password" type="password" required/>
                            <div class="valid-feedback">Kitöltve.</div>
                            <div class="invalid-feedback">Kötelezően kitöltendő</div>
                        </div>
                        <input class="btn btn-primary" type="submit" name="login" value="Belépés">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>';

}

?>

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