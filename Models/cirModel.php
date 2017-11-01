<?php

require_once('../Helpers/bdd_var.php');

/**
 *
 */
class BDD_CIR {

  private $database = null;

  function __construct() {
    try {
      $this->database = new PDO('mysql:host='.BDD_HOST.';dbname='.BDD_NAME.';charset=utf8', BDD_LOGIN, BDD_PASSWORD);
      // print "Connexion à la base de données : '" . BDD_NAME . "' réussi.<br/>";
    } catch (Exception $e) {
      print "[BDD_ERROR] : " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function getAll() {
    $requete = $this->database->prepare("SELECT * FROM users");
    $requete->execute();

    return $requete->fetchAll();
  }

  public function connexion($login, $pass) {
    $requete = $this->database->prepare("SELECT *, count(*) as valide FROM users WHERE nom = :login OR mail = :login AND password = PASSWORD(:pass)");
    $requete->bindParam(':login', $login, PDO::PARAM_STR);
    $requete->bindParam(':pass', $pass, PDO::PARAM_STR);

    $requete->execute();
    $resultat = $requete->fetch();

    return $resultat;
  }
}

?>
