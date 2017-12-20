<?php
require_once('../Models/cirModel.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container">
        <h1 class="ui center dividing aligned header"><i class="handshake icon"></i></h1>
        <article class="ui center aligned piled segment">
          <h4 class="ui horizontal divider header">
            <i class="graduation icon"></i>
            Ajouter des matieres pour votre promo
          </h4>
          <p>Ne connaissant pas la totalité des matières de chaque promo ainsi que leur coefficient, je ne peux pas compléter la base de données sans votre aide.
            <br>N'hésitez pas à m'envoyer la liste de vos matières avec leurs coefficients et le nom de votre promo.</p>
          <h4 class="ui horizontal divider header">
            <i class="bug icon"></i>
            Déclarer un bug
          </h4>
          <p>Si vous constatez un bug ou un défaut dans le site n'hésitez pas à me le rapporter.</p>
          <h4 class="ui horizontal divider header">
            <i class="line chart icon"></i>
            Proposer une amélioration
          </h4>
          <p>Si une amélioration vous vient à l'esprit envoyez moi un message pour aider à améliorer ce site.</p>
          <h4 class="ui horizontal divider header">
            <i class="mail icon"></i>
            Me contacter
          </h4>
          <p><i class="mail icon"></i> Mon adresse mail : boiselet.jeremy@gmail.com<br>
          <i class="facebook icon"></i> Facebook : <a href="https://www.facebook.com/jeremy.boiselet">Jeres Boiselet</a></p>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
</html>
