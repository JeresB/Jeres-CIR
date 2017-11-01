<?php
require_once('../Models/cirModel.php');
session_start();

unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['mail']);

$_SESSION['connected'] = false;

header('Location: /View/');
?>
