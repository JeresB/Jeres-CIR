<?php
require_once('../Models/cirModel.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container">
        <article class="ui piled segment">
          <div class="ui header">
            Bienvenu sur l'ENT des notes !
          </div>
          <div class="">
            Ici tu peux enregistrer tes notes pour calculer automatiquement ta moyenne !<br><br>
            <img class="img-resp" src="../Ressources/image/student-life.jpg" alt="Fond d'écran">
          </div>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
</html>
