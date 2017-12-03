<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
  $resultat = $gestion_bdd->updateInfosPerso($_POST['nom'], $_POST['prenom']);
} else if (isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['pass_actuel'])) {
  $resultat = $gestion_bdd->updatePassword($_POST['password'], $_POST['pass_actuel']);
}

if($resultat > 0) {
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['success'] = "Mise à jour effectuée !";
} else {
	$_SESSION['erreur'] = "Une erreur est survenu lors de la sauvegarde !";
}

header('Location: /View/profil.php');
?>
