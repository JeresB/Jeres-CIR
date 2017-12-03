<?php

$gestion_bdd = new BDD_CIR();

$matieres = $gestion_bdd->getMatieres($_SESSION['promo']);

?>
