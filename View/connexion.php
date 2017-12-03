<?php
require_once('../Controllers/navbarController.php');

if ($connected) {
  header('Location: /View/profil.php');
}
require_once('../Models/cirModel.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container padding-top-20">
        <article class="ui raised tertiary blue inverted segment">
          <h1 class="ui center dividing aligned header"><i class="user icon"></i> Connexion</h1>
          <form id="form-connexion" class="ui form" action="/Controllers/connexion.php" method="post">
            <div class="field">
              <label>Nom d'utilisateur / Email</label>
              <input name="login" type="text">
            </div>
            <div class="field">
              <label>Mot de passe</label>
              <input name="password" type="password">
            </div>
            <button class="ui submit right labeled icon green button">
              <i class="sign in icon"></i>
              Se connecter
            </button>
            <div class="ui error message"></div>
          </form>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
  <script src="../Controllers/form_connexion_validation.js"></script>
</html>
