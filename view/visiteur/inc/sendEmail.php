<?php

// Remplacez ceci par votre propre adresse email
$siteOwnersEmail = 'kassas.kayes93@gmail.com';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Verification du nom
	if (strlen($name) < 2) {
		$error['name'] = "Veuillez saisir votre nom.";
	}
	// Verification de l'email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Veuillez mettre une adresse email valide.";
	}
	// Verification Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Veuillez saisir un message avec au moins 15 caractères.";
	}
   //Objet
	if ($subject == '') { $subject = "Formulaire de contact"; }


   //définition du message
   $message .= "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br />Cet email a été envoyé à partir du formulaire de contact de votre site.. <br />";

   // definition depuis: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


   if (!$error) {

      ini_set("sendmail_from", $siteOwnersEmail); // pour serveur windows
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
      else { echo "Il y a une erreur veuillez reéssayer ."; }

	} # end if - Pas d'erreur

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;

		echo $response;

	} # end if - Erreur validation

}

?>
