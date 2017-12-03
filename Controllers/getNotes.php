<?php

$gestion_bdd = new BDD_CIR();

$noteees = $gestion_bdd->getNotes($_SESSION['surnom'], $_SESSION['mail']);

?>
