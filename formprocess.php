<?php
require_once 'PhPmailer/PHPMailerAutoload.php' ;
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
		$odabranalokacija = 'Djordja';
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
$m->Host = 'smtp.gmail.com';
$m->Username = 'plecic.novak@gmail.com';
$m->Password = 'Srbija03';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->From = $email;
$m->FromName = $ime;
$m->addAddress('plecic.novak@gmail.com');

$m->Subject = 'Zakazivanje pranja sa CleanCo sajta';
$m->Body = 'Test poruka narudzbe za'. $ime . 'za datum'. $datum . 'blabla za lokaciju' . $odabranalokacija;
$m->AltBody = 'Test poruka narudzbe za'. @ime. 'za datum'. @datum . 'blabla';

var_dump($m->send());



?>