<?php
require_once('../Models/cirModel.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container">
        <h1 class="ui center dividing aligned header"><i class="wikipedia icon"></i> Présentation</h1>
        <article class="ui center aligned piled segment">
          <h4 class="ui horizontal divider header">
            <i class="code icon"></i>
            Fonctionnalités en développement
          </h4>
          <ul class="ui list">
            <li>Moyenne par matière pour chaque promo.</li>
            <li>Moyenne par sous modules</li>
            <li>Présentation - Comment utiliser le site ?</li>
          </ul>
          <h4 class="ui horizontal divider header">
            <i class="tasks icon"></i>
            Présentation
          </h4>
          <p>En développement ;)</p>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
</html>
