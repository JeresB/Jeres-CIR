<?php
require_once('class.phpmailer.php');

function mailContact($mail, $objet, $message) {
  $mail = new PHPMailer();

  $mail->AddReplyTo($mail);
  $mail->SetFrom($mail);
  $mail->AddAddress("boiselet.jeremy@gmail.com", "Jeremy Boiselet");
  $mail->Subject    = $objet;
  $mail->AltBody    = $message;

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

$resultat = mailContact($_POST['mail'], $_POST['objet'], $_POST['message']);

if($resultat) $_SESSION['success'] = "Mail envoyé";
else $_SESSION['erreur'] = "Erreur le mail n'a pas pu être envoyé !";

header('Location: /View/aide.php');
?>
