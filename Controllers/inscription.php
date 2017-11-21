<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();
$resultat = false;

$erreur = "";
if($_POST['password'] == $_POST['password2']) {
  $identique = $gestion_bdd->findCompteIdentique($_POST['mail']);
  if ($identique) $resultat = $gestion_bdd->inscription($_POST['nom'], $_POST['prenom'], $_POST['password'], $_POST['mail']);
  else $erreur .= " L'adresse mail est déjà utilisé !";
} else {
  $erreur .= " les 2 mots de passe sont différents";
}

if($resultat) $_SESSION['success'] = "Inscription réussi, vous pouvez maintenant vous connecter !";
else $_SESSION['erreur'] = "Erreur lors de l'inscription !" . $erreur;

header('Location: /View/');
?>
