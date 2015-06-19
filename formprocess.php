
<?php
require_once 'PhPmailer/PHPMailerAutoload.php' ;
require_once 'Includes/constants.php' ;



echo "Form page  variables:"; 

echo "<br/>";
	$ime = $_POST['name'];
	echo $ime;
echo "<br/>";
	$email = $_POST['email'];
	echo $email;
echo "<br/>";
	$phoneNumber = $_POST['phoneNumber'];
	echo $phoneNumber;
echo "<br/>";


	$location = $_POST['location'];
		if ($location==0) {
		$odabranalokacija = 'BOP';	
		}
		elseif ($location==1) {
		$odabranalokacija = 'Savograd';
		}
		elseif (isset($_POST['customLocation'])) {
		$odabranalokacija = $_POST['customLocation'];
		}
		echo $odabranalokacija;

echo "<br/>";
	$datum =  $_POST['date'];
	echo $datum;
echo "<br/>";
	$vreme= $_POST['time'];
		switch ($vreme) {
			case 0:
				$odabranovreme = '09:00';
				echo $odabranovreme;
				break;
			case 1:
				$odabranovreme = '09:30';
				echo $odabranovreme;
				break;
			case 2:
				$odabranovreme = '10:00';
				echo $odabranovreme;
				break;
			case 3:
				$odabranovreme = '10:30';
				echo $odabranovreme;
				break;
			case 4:
				$odabranovreme = '11:00';
				echo $odabranovreme;
				break;
			case 5:
				$odabranovreme = '11:30';
				echo $odabranovreme;
				break;
			case 6:
				$odabranovreme = '12:00';
				echo $odabranovreme;
				break;
			case 7:
				$odabranovreme = '12:30';
				echo $odabranovreme;
				break;
			case 8:
				$odabranovreme = '13:00';
				echo $odabranovreme;
				break;
			case 9:
				$odabranovreme = '13:30';
				echo $odabranovreme;
				break;
			case 10:
				$odabranovreme = '14:00';
				echo $odabranovreme;
				break;
			case 11:
				$odabranovreme = '14:30';
				echo $odabranovreme;
				break;

				case 12:
				$odabranovreme = '15:00';
				echo $odabranovreme;
				break;

				case 13:
				$odabranovreme = '15:30';
				echo $odabranovreme;
				break;

				case 14:
				$odabranovreme = '16:00';
				echo $odabranovreme;
				break;

				case 15:
				$odabranovreme = '16:30';
				echo $odabranovreme;
				break;

				case 16:
				$odabranovreme = '17:00';
				echo $odabranovreme;
				break;

				case 17:
				$odabranovreme = '17:30';
				echo $odabranovreme;
				break;

				case 18:
				$odabranovreme = '18:00';
				echo $odabranovreme;
				break;

				case 19:
				$odabranovreme = '18:30';
				echo $odabranovreme;
				break;

				case 20:
				$odabranovreme = '19:00';
				echo $odabranovreme;
				break;

				case 21:
				$odabranovreme = '19:30';
				echo $odabranovreme;
				break;

		}

# variables = array($ime, $email, $phoneNumber, $location, $datum);
#	foreach ($variables as $key) {
#		echo gettype($key);
#		echo "<br/>";
#		# code...
#	} 

#PhPMailer starts here

$m = new PhPmailer;

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2;

$m->Host = 'mail.cleanco.rs';
$m->SMTPSecure = 'tls';
$m->Port = '26';

$m->Username = 'zakazano@cleanco.rs';
$m->Password = 'Zakazano00' ;


$m->CharSet = 'UTF-8';


$m->Sender=$email;
$m->SetFrom($email, $ime, TRUE);
$m->FromName = $ime;
$m->AddReplyTo($email, $ime);
$m->addAddress('zakazano@cleanco.rs');

$m->isHTML(true);

$m->Subject = 'Zakazivanje pranja sa CleanCo sajta';
$m->Body =  'Naručeno pranje za : <b>'. $ime . '</b> <br> Datum : <b> '. $datum . '</b> <br> Za lokaciju: <b>' . $odabranalokacija  . '</b> <br> U : <b>' . $odabranovreme .' </b> časova' ;
$m->AltBody = 'Test poruka narudžbe za : <b>'. $ime . '</b> </br> Datum : <b> '. $datum . '</b> </br> Za lokaciju: <b>' . $odabranalokacija  . '</b> </br> U : <b>' . $odabranovreme .' </b> časova' ;



if(!$m->Send()) {
	echo '<script>window.location.replace("http://www.cleanco.rs?sent=false")</script>;';
}  else {
  	echo '<script>window.location.replace("http://www.cleanco.rs?sent=true")</script>;';
}



?>