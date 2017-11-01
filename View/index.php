<?php
require_once('../Models/cirModel.php');

$gestion_bdd = new BDD_CIR();

$data = $gestion_bdd->getAll();

?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body style="height=3000px;">
      <?php include_once('../Templates/navbar.php'); ?>
      <?php if(isset($_SESSION['success'])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                '.$_SESSION["success"].'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
      } else if(isset($_SESSION['erreur'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Attention !</strong> Nom d\'utilisateur ou mot de passe incorrect !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
      }

      unset($_SESSION['erreur']);
      unset($_SESSION['success']);
      ?>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
</html>
