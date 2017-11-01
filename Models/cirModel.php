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

  public function inscription($nom, $prenom, $pass, $mail) {
    $requete = $this->database->prepare("INSERT INTO users(nom, prenom, password, mail) VALUES(:nom, :prenom, PASSWORD(:pass), :mail)");
    $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindParam(':pass', $pass, PDO::PARAM_STR);
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);

    $resultat = $requete->execute();

    return $resultat;
  }

  public function add_note($matiere, $note, $nom, $prenom) {
    $requete = $this->database->prepare("SELECT id FROM users WHERE nom = :nom AND prenom = :prenom");
    $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);

    $requete->execute();

    $id = $requete->fetch();
    $id = $id[0];

    if ($id > 0) {
      $requete = $this->database->prepare("INSERT INTO notes(matiere, note, id_Users) VALUES(:matiere, :note, :id)");
      $requete->bindParam(':matiere', $matiere, PDO::PARAM_STR);
      $requete->bindParam(':note', $note, PDO::PARAM_STR);
      $requete->bindParam(':id', $id, PDO::PARAM_INT);

      $resultat = $requete->execute();
    } else $resultat = false;

    return $resultat;
  }

  public function getNotes($nom, $prenom) {
    $requete = $this->database->prepare("SELECT id FROM users WHERE nom = :nom AND prenom = :prenom");
    $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);

    $requete->execute();

    $id = $requete->fetch();
    $id = $id[0];

    if ($id > 0) {
      $requete = $this->database->prepare("SELECT * FROM notes WHERE id_Users = :id ORDER BY matiere, note");
      $requete->bindParam(':id', $id, PDO::PARAM_INT);

      $requete->execute();
      $resultat = $requete->fetchAll();
    } else $resultat = false;

    return $resultat;
  }

  public function delete_note($id) {
    $requete = $this->database->prepare("DELETE FROM notes WHERE id = :id");
    $requete->bindParam(':id', $id, PDO::PARAM_INT);

    $resultat = $requete->execute();

    return $resultat;
  }
}

?>
