<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

$resultat = $gestion_bdd->connexion($_POST['login'], $_POST['password']);

$_SESSION['nom'] = $resultat['nom'];
$_SESSION['prenom'] = $resultat['prenom'];
$_SESSION['mail'] = $resultat['mail'];
$_SESSION['connected'] = $resultat['valide'];

if(isset($resultat) && $resultat != false) {
	$_SESSION['success'] = "Connexion réussie !";
	$_SESSION['nom'] = $resultat['nom'];
	$_SESSION['prenom'] = $resultat['prenom'];
	$_SESSION['mail'] = $resultat['mail'];
	$_SESSION['connected'] = true;
} else {
	$_SESSION['erreur'] = "Connexion échouée !";
	$_SESSION['connected'] = false;
}

header('Location: /View/');
?>
