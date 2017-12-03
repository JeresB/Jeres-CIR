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
    $requete = $this->database->prepare("SELECT * FROM utilisateur");
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getPromos() {
    $requete = $this->database->prepare("SELECT * FROM promo");
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getMatieres($promo) {
    $requete = $this->database->prepare("SELECT id, nom_matiere, coeff_matiere FROM promo, matiere WHERE promo.nom_promo = :promo AND promo.nom_promo = matiere.nom_promo");
    $requete->bindParam(':promo', $promo, PDO::PARAM_STR);
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getNotes($login, $mail) {
    $requete = $this->database->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur = :login AND mail = :mail");
    $requete->bindParam(':login', $login, PDO::PARAM_STR);
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);

    $requete->execute();
    $user = $requete->fetch();
    $code = $user['id'];

    $requete = $this->database->prepare("SELECT note.id, note.note, note.coeff_note, matiere.nom_matiere, matiere.coeff_matiere FROM note, matiere WHERE id_utilisateur = :code AND note.id_matiere = matiere.id");
    $requete->bindParam(':code', $code, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getNoteByMatiere($login, $mail, $matiere) {
    $requete = $this->database->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur = :login AND mail = :mail");
    $requete->bindParam(':login', $login, PDO::PARAM_STR);
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);

    $requete->execute();
    $user = $requete->fetch();
    $code = $user['id'];

    $requete = $this->database->prepare("SELECT note.note, note.coeff_note FROM note WHERE id_utilisateur = :code AND note.id_matiere = :matiere");
    $requete->bindParam(':code', $code, PDO::PARAM_INT);
    $requete->bindParam(':matiere', $matiere, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetchAll();
  }

  public function connexion($login, $pass) {
    $pass = crypt($pass, '$6$rounds=5000$usesomesillystringforsalt$');
	  echo $login.'<br>'.$pass;
    $requete = $this->database->prepare("SELECT * FROM utilisateur WHERE (nom_utilisateur = :nom AND password = :passnom) OR (mail = :mail AND password = :passmail)");
    $requete->bindParam(':nom', $login, PDO::PARAM_STR);
    $requete->bindParam(':passnom', $pass, PDO::PARAM_STR);
    $requete->bindParam(':mail', $login, PDO::PARAM_STR);
    $requete->bindParam(':passmail', $pass, PDO::PARAM_STR);

    $requete->execute();
    //$requete->debugDumpParams();
    $resultat = $requete->fetch();

    return $resultat;
  }

  public function inscription($login, $pass, $mail, $promo) {
    $pass = crypt($pass, '$6$rounds=5000$usesomesillystringforsalt$');
    $requete = $this->database->prepare("INSERT INTO utilisateur(nom_utilisateur, password, mail, nom_promo) VALUES(:login, :pass, :mail, :promo)");
    $requete->bindParam(':login', $login, PDO::PARAM_STR);
    $requete->bindParam(':pass', $pass, PDO::PARAM_STR);
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);
    $requete->bindParam(':promo', $promo, PDO::PARAM_STR);
    error_log("INSERT INTO utilisateur(nom_utilisateur, password, mail, nom_promo) VALUES(:".$login.", :".$pass.", :".$mail.", ".$promo.")");
    $resultat = $requete->execute();

    return $resultat;
  }

  public function findCompteIdentique($mail) {
    $requete = $this->database->prepare("SELECT count(*) as nb FROM utilisateur WHERE mail = :mail");
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);

    $requete->execute();
    $resultat = $requete->fetch();

    if ($resultat['nb'] > 0) return false;
    else return true;
  }

  public function updateInfosPerso($nom, $prenom) {
    $requete = $this->database->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom WHERE nom_utilisateur = :surnom AND mail = :mail");
    $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindParam(':surnom', $_SESSION['surnom'], PDO::PARAM_STR);
    $requete->bindParam(':mail', $_SESSION['mail'], PDO::PARAM_STR);

    $requete->execute();
    return $requete->rowCount();
  }

  public function updatePassword($new, $old) {
    $new = crypt($new, '$6$rounds=5000$usesomesillystringforsalt$');
    $old = crypt($old, '$6$rounds=5000$usesomesillystringforsalt$');

    $requete = $this->database->prepare("SELECT * FROM utilisateur WHERE mail = :mail AND password = :old");
    $requete->bindParam(':mail', $_SESSION['mail'], PDO::PARAM_STR);
    $requete->bindParam(':old', $old, PDO::PARAM_STR);

    $requete->execute();

    if ($requete->rowCount() > 0) {
      $requete = $this->database->prepare("UPDATE utilisateur SET password = :new WHERE nom_utilisateur = :surnom AND mail = :mail");
      $requete->bindParam(':new', $new, PDO::PARAM_STR);
      $requete->bindParam(':surnom', $_SESSION['surnom'], PDO::PARAM_STR);
      $requete->bindParam(':mail', $_SESSION['mail'], PDO::PARAM_STR);
      error_log(print_r($requete->errorInfo()));
      $requete->execute();
      return $requete->rowCount();
    } else {
      return 0;
    }
  }

  public function add_note($matiere, $note, $coeff, $login, $mail) {
    $requete = $this->database->prepare("SELECT id FROM utilisateur WHERE nom_utilisateur = :login AND mail = :mail");
    $requete->bindParam(':login', $login, PDO::PARAM_STR);
    $requete->bindParam(':mail', $mail, PDO::PARAM_STR);

    $requete->execute();

    $id = $requete->fetch();
    $id = $id[0];

    if ($id > 0) {
      error_log("GOOD");
      $requete = $this->database->prepare("INSERT INTO note(note, coeff_note, id_utilisateur, id_matiere) VALUES(:note, :coeff, :id_utilisateur, :id_matiere)");
      $requete->bindParam(':note', $note);
      $requete->bindParam(':coeff', $coeff);
      $requete->bindParam(':id_utilisateur', $id, PDO::PARAM_STR);
      $requete->bindParam(':id_matiere', $matiere, PDO::PARAM_STR);
      error_log("note : ".$note);
      error_log("coeff : ".$coeff);
      error_log("id_utilisateur : ".$id);
      error_log("id_matiere : ".$matiere);
      error_log("requete : ".$matiere);
      $resultat = $requete->execute();
    } else $resultat = false;

    return $resultat;
  }

  // public function getNotes($nom, $prenom) {
  //   $requete = $this->database->prepare("SELECT id FROM utilisateur WHERE nom = :nom AND prenom = :prenom");
  //   $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
  //   $requete->bindParam(':prenom', $prenom, PDO::PARAM_STR);
  //
  //   $requete->execute();
  //
  //   $id = $requete->fetch();
  //   $id = $id[0];
  //
  //   if ($id > 0) {
  //     $requete = $this->database->prepare("SELECT * FROM note WHERE id_Users = :id ORDER BY matiere, note");
  //     $requete->bindParam(':id', $id, PDO::PARAM_INT);
  //
  //     $requete->execute();
  //     $resultat = $requete->fetchAll();
  //   } else $resultat = false;
  //
  //   return $resultat;
  // }

  public function delete_note($id) {
    $requete = $this->database->prepare("DELETE FROM note WHERE id = :id");
    $requete->bindParam(':id', $id, PDO::PARAM_INT);

    $resultat = $requete->execute();

    return $resultat;
  }
}

?>
