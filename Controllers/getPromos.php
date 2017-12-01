<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

$promos = $gestion_bdd->getPromos();

?>
