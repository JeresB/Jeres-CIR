<?php
require_once('class.phpmailer.php');

function mailContact($adresse_mail, $objet, $message) {
  $mail = new PHPMailer();
  $adresse = 'boiselet.jeremy@gmail.com';
  $nom = 'Jeremy Boiselet';

  $mail->AddReplyTo($adresse_mail);
  $mail->SetFrom($adresse_mail);
  $mail->AddAddress($adresse, $nom);
  $mail->Subject    = $objet;
  $mail->AltBody    = $message;

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

$resultat = mailContact($_POST['mail'], $_POST['objet'], $_POST['message']);
if ($resultat) {
  echo 'good';
} else {
  echo 'bad';
}
if($resultat) $_SESSION['success'] = "Mail envoyé";
else $_SESSION['erreur'] = "Erreur le mail n\'a pas pu être envoyé !";

//header('Location: /View/aide.php');
?>
