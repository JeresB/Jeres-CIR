<?php

$gestion_bdd = new BDD_CIR();

$modules = $gestion_bdd->getModules($_SESSION['promo']);

?>
