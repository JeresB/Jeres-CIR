<?php
require_once('cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

$resultat = $gestion_bdd->connexion($_POST['login'], $_POST['password']);

$_SESSION['nom'] = $resultat['nom'];
$_SESSION['prenom'] = $resultat['prenom'];
$_SESSION['mail'] = $resultat['mail'];
$_SESSION['connected'] = $resultat['valide'];

if($resultat['valide']) $_SESSION['success'] = "Connexion réussie !";
else $_SESSION['erreur'] = "Connexion échouée !";

header('Location: /View/');
?>
