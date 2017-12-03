<?php
require_once('../Models/cirModel.php');
session_start();

unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['mail']);
unset($_SESSION['surnom']);
unset($_SESSION['promo']);

$_SESSION['connected'] = false;

header('Location: /View/');
?>
