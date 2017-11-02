<?php
require_once('Helpers/bdd_var.php');

try {
  $database = new PDO('mysql:host='.BDD_HOST.';dbname='.BDD_NAME.';charset=utf8', BDD_LOGIN, BDD_PASSWORD);
  print "Connexion à la base de données : '" . BDD_NAME . "' réussi.<br/>";
} catch (Exception $e) {
  print "[BDD_ERROR] : " . $e->getMessage() . "<br/>";
  die();
}

$requete = $database->prepare("SELECT * FROM users");
$requete->execute();

print_r($requete->fetchAll());
?>

