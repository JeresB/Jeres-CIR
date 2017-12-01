<?php require_once('../Controllers/navbarController.php'); ?>

<div class="ui stackable menu">
  <div class="item">
    <a href="/View"><img src="../Ressources/image/isen.png" width="32" height="32"></a>
  </div>
  <a class="item" href="/View">ENT Jeres</a>
  <div class="right menu">
    <a class="item" href="presentation.php">Présentation</a>
    <?php
      if ($connected) {
        echo '<a id="link-note" class="item" href="/View/notes.php">Notes</a>
              <span class="item">Bonjour '.$_SESSION["prenom"].'</span>&nbsp;&nbsp;
              <div class="item">
                <a href="/Controllers/deconnexion.php">
                  <div class="ui red button"><i class="sign out icon"></i></div>
                </a>
              </div>';
      } else {
        echo '<a id="link-connexion" class="item" href="/View/connexion.php">Connexion</a>
              <a id="link-inscription" class="item" href="/View/inscription.php">Inscription</a>';
      }
    ?>
  </div>
</div>
