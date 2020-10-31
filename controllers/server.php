<?php

    require_once '../modells/db.php';

    use PHPMailer\PHPMailer\PHPMailer;

    require_once '../vendor/autoload.php';

    define ('GUSER','444172fd88e0cb');
    define ('GPWD','d5021836c5c0d9');

class HomeController {
	
	public function index() {
		
		global $conn;
		
		if($result = $conn->query("SELECT * FROM `service`")) {
			
			$table = $result->fetch_all(MYSQLI_ASSOC);
			
		echo '<div class="card-deck">
  <div class="card">
    <a href="services.php#sec1"><img class="card-img-top" src="' .$table[0]["image"]. '" width="400px" height="400px" alt="Card image cap"></a>
    <div class="card-body">
      <a href="services.php#sec1"><h5 class="card-title">' .$table[0]["name"]. '</h5></a>
      <p class="card-text">' .$table[0]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[0]["date"]. '</small></p>
    </div>
  </div>
  <div class="card">
   <a href="services.php#sec2"> <img class="card-img-top" src="' .$table[1]["image"]. '" width="400px" height="400px" alt="Card image cap"></a>
    <div class="card-body">
      <a href="services.php#sec2"><h5 class="card-title">' .$table[1]["name"]. '</h5></a>
      <p class="card-text">' .$table[1]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[1]["date"]. '</small></p>
    </div>
  </div>
  <div class="card">
    <a href="services.php#sec3"><img class="card-img-top" src="' .$table[2]["image"]. '" width="400px" height="400px" alt="Card image cap"></a>
    <div class="card-body">
      <a href="services.php#sec3"><h5 class="card-title">' .$table[2]["name"]. '</h5></a>
      <p class="card-text">' .$table[2]["description"]. '</p>
      <p class="card-text"><small class="text-muted">' .$table[2]["date"]. '</small></p>
    </div>
  </div>
</div>';
			
		}
		
	}



	public function contact() {
		
		global $conn;
		
		error_reporting(0);
		
		$Email = $Name = $Subject = $Message = '';

		if(isset($_POST["name"]) && !empty($_POST["name"])) {
			
			$Name = $_POST["name"];
			
		}
		
		if(isset($_POST["email"]) && !empty($_POST["email"])) {
			
			$Email = $_POST["email"];
			
		}
		
		if(isset($_POST["subject"]) && !empty($_POST["subject"])) {
			
			$Subject = $_POST["subject"];
			
		}
		
		if(isset($_POST["message"]) && !empty($_POST["message"])) {
			
			$Message = $_POST["message"];
			
		}
			
		if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]))	{
			
			$sql = "INSERT INTO email_message (sender_email,sender_name,receiver_email,receiver_name,subject,message) VALUES ('$Email','$Name','kuroosa97@gmail','LabasTibor','$Subject','$Message')";
		
		}
		
		if(!mysqli_query($conn, $sql)) {
			
			echo NULL;
			
		} else {
			
			echo NULL;
			
		}
		
	}
	
	public function sendContactEmail() {
		
		global $mail;
		$Name = $_POST["name"];
		$Email = $_POST["email"];
		$Subject = $_POST["subject"];
		$Message = $_POST["message"];
		$Phone = $_POST["phone"];
		$date = date("Y.m.d");
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'smtp.mailtrap.io';
		$mail->SMTPAuth = true;
		$mail->Username = GUSER;
		$mail->Password = GPWD;
		$mail->CharSet = 'UTF-8';
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAutoTLS = false;
		$mail->Port = 2525;
		$mail->WordWrap  = 50;
		$mail->setFrom('labastibor@vanegyotletem.hu', 'Tibor');
		$mail->addAddress($Email, 'Me');
		$mail->Subject = 'Lábas Tibor - VanEgyÖtletem.Hu – '.$date;
		$mail->isHTML(TRUE);
		$mail->Body = '<html>Név: '.$Name.'<br>Telefonszám: '.$Phone.'<br>Email: '.$Email.'<br>Tárgy: '.$Subject.'<br>Üzenet: '.$Message.'</html>';
		$mail->AltBody = 'Név: '.$Name.'  Telefonszám: '.$Phone.'  Email: '.$Email.'  Tárgy: '.$Subject.'  Üzenet: '.$Message;
		
		if(!$mail->send()){
			
			echo "<script type='text/javascript'>alert('Email küldés sikertelen!\nHiba: '".$mail->ErrorInfo.");</script>";
		
		} else {
			
			echo "<script type='text/javascript'>alert('Email elküldve!');</script>";
			
		}
		
		
	}
	
}

class ServiceController {

    public function merge() {

        $types = $_POST['types'];

        if (count($types) != 0) {

            if (count($types) > 1) {

                $last = end($types);

                for ($i = 0; $i < count($types)-1; $i++) {

                    echo "types LIKE '%" . $types[$i] . "%' AND ";

                }

                echo "types LIKE '%" . $last . "%'";
            }

            else {

                echo "types LIKE '%" . $types[0] . "%'";

            }

        }

    }
	
	public function show() {

		global $conn;

        ob_start();
        $this->merge();
        $merged = ob_get_clean();

		$sql = "SELECT * FROM service WHERE " . $merged;

		//echo $sql;

		$result = $conn->query($sql);
		
		if($result -> num_rows > 0) {

		    while($row = $result -> fetch_assoc()) {
			
			echo '<br/>
<section class="page-section cta" id="sec1">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="bg-faded rounded p-5" style="text-align: center">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"><img class="card-img-top" src="files/' .$row["image"]. '" width="300px" height="300px" alt="Card image cap"></span>
			  <span class="section-heading-upper">'.$row["name"].'</span>
			  <span class="section-heading-upper">Ár:* '.$row["price"].' Ft</span>
            </h2>
            <p class="mb-0">'. $row["description"] .'<br><a href="'.$row["url"].'" target="_blank"> &lt;&lt; Tetszik ez az ötlet &gt;&gt;</a></p><br/>
          <p class="mb-0" style="font-size: small">Hozzáadva: '.$row["date"].'</p><br>
          <p class="mb-0" style="font-size: x-small; text-align: right">* A kiírt ár a feltöltés idején volt aktuális</p>
          </div>
        </div>
      </div>
    </div>
  </section>
';
            }
			
		}

		else {

		    echo '<section class="page-section cta" id="sec1">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="bg-faded rounded p-5" style="text-align: center">
            <p class="mb-0">Nem találtunk a feltételeknek megfelelő ajándékot, kérjük próbálkozzon más paramtérekkel!</p>
            </div>
        </div>
      </div>
    </div>
  </section>';

        }
		
	}
	
	public function index() {

        echo '<br/>
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
';

        /*$types = array($_POST["types"]);

        echo count($types);*/

        }
	
}

class AdminController {

    public function append() {

        global $conn;

                error_reporting(0);

                $Name = $Image = $Description = $Price = $Url = $Types = '';

                $target_dir = "../views/files/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                if(isset($_POST["name"]) && !empty($_POST["name"])) {

                    $Name = $_POST["name"];

                }

                if(isset($_POST["description"]) && !empty($_POST["description"])) {

                    $Description = $_POST["description"];

                }

                if(isset($_POST["price"]) && !empty($_POST["price"])) {

                    $Price = $_POST["price"];

                }

                if(isset($_POST["url"]) && !empty($_POST["url"])) {

                    $Url = $_POST["url"];

                }

                if(isset($_POST["types"]) && !empty($_POST["types"])) {

                    $Types = $_POST['types'];

                }


                if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["url"]) && !empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["price"]) && !empty($_POST["url"]))	{

                    $Date = date("Y-m-d H:i:s");

                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                        $Image = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

                    }

                    $sql = "INSERT INTO service (image,price,name,description,date,types,url) VALUES ('$Image','$Price','$Name','$Description','$Date','$Types','$Url')";

                }

                if(!mysqli_query($conn, $sql)) {

                    echo NULL;

                } else {

                    echo NULL;

                }

            }

}

$AdminController = new AdminController();
$HomeController = new HomeController();
$ServiceController = new ServiceController();

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
	
	$HomeController->sendContactEmail();
	
}
	
?>