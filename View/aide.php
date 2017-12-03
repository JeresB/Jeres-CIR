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
          <p>Ne connaissant pas la totalité des matières de chaques promos ainsi que leur coefficient, je ne peux pas completer la base de données sans votre aide.
            <br>N'hésiter pas à m'envoyer la liste de vos matières avec leurs coefficient et le nom de votre promo.</p>
          <h4 class="ui horizontal divider header">
            <i class="bug icon"></i>
            Déclarer un bug
          </h4>
          <p>Si vous constater un bug ou un défaut dans le site n'hésiter pas à me le rapporter.</p>
          <h4 class="ui horizontal divider header">
            <i class="line chart icon"></i>
            Proposer une amélioration
          </h4>
          <p>Si une amélioration vous viens à l'esprit envoyer moi un message pour aider à améliorer ce site.</p>
          <h4 class="ui horizontal divider header">
            <i class="mail icon"></i>
            Me contacter
          </h4>
          <form id="form-contact" class="ui form" action="/Controllers/contact.php" method="post">
            <div class="field">
              <label>Adresse Mail</label>
              <input name="mail" type="email">
            </div>
            <div class="field">
              <label>Objet</label>
              <input name="objet" type="text">
            </div>
            <div class="field">
              <label>Message</label>
              <textarea name="message" rows=8></textarea>
            </div>
            <button class="ui submit right labeled icon blue button">
              <i class="send icon"></i>
              Envoyer le message
            </button>
            <div class="ui error message"></div>
          </form>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
  <script src="../Controllers/form_contact_validation.js"></script>
</html>
