<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

$resultat = $gestion_bdd->add_note($_POST['matiere'], $_POST['note'], $_SESSION['nom'], $_SESSION['prenom']);

if($resultat) $_SESSION['success'] = "Note ajoutée";
else $_SESSION['erreur'] = "Erreur lors de l'ajout de cette note !";

header('Location: /View/notes.php');
?>
