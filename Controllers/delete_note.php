<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();
echo $_POST['id_note'];
$resultat = $gestion_bdd->delete_note($_POST['id_note']);

if($resultat) $_SESSION['success'] = "Note supprimée !";
else $_SESSION['erreur'] = "Erreur lors de la suppression de cette note !";

header('Location: /View/notes.php');
?>
