<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();
$resultat = false;

$erreur = "";
if($_POST['password'] == $_POST['password2']) {
  $identique = $gestion_bdd->findCompteIdentique($_POST['mail'], $_POST['login']);
  if ($identique == 0) $resultat = $gestion_bdd->inscription($_POST['login'], $_POST['password'], $_POST['mail'], $_POST['promo']);
  else $erreur .= " L\'adresse mail ou le nom d\'utilisateur sont déjà utilisés !";
} else {
  $erreur .= " les 2 mots de passe sont différents";
}

if($resultat) {
  $_SESSION['success'] = "Inscription réussi, vous pouvez maintenant vous connecter !";
  $resultat = $gestion_bdd->connexion($_POST['login'], $_POST['password']);

  if(isset($resultat) && $resultat != false) {
  	$_SESSION['success'] = "Connexion réussie !";
    $_SESSION['nom'] = '';
    $_SESSION['prenom'] = '';
  	$_SESSION['mail'] = $resultat['mail'];
    $_SESSION['promo'] = $resultat['nom_promo'];
    $_SESSION['surnom'] = $resultat['nom_utilisateur'];
  	$_SESSION['connected'] = true;
  	header('Location: /View/');
  } else {
  	$_SESSION['erreur'] = "Connexion échouée !";
  	$_SESSION['connected'] = false;
  	header('Location: /View/connexion.php');
  }
}
else {
  $_SESSION['erreur'] = "Erreur lors de l\'inscription !" . $erreur;
  header('Location: /View/inscription.php');
}

?>
