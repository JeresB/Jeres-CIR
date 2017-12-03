<?php
require_once('../Models/cirModel.php');
require_once('../Controllers/navbarController.php');

if (!$connected) {
  header('Location: /View');
}
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container">
        <h1 class="ui center dividing aligned header"><i class="tasks icon"></i> Profil</h1>
        <article class="ui piled segment">
          <h4 class="ui horizontal divider header">
            <i class="user icon"></i>
            Informations Personnelles
          </h4>
          <form id="form-info_perso" class="ui form" action="/Controllers/profil.php" method="post">
            <div class="field">
              <label>Nom d'utilisateur</label>
              <input name="user_name" type="text" value="<?=$_SESSION['surnom'] ?>" readonly>
            </div>
            <div class="field">
              <label>Prénom</label>
              <input name="prenom" type="text" value="<?=$_SESSION['prenom'] ?>">
            </div>
            <div class="field">
              <label>Nom</label>
              <input name="nom" type="text" value="<?=$_SESSION['nom'] ?>">
            </div>
            <button class="ui submit right labeled icon green button">
              <i class="save icon"></i>
              Sauvegarder
            </button>
            <div class="ui error message"></div>
          </form>
          <h4 class="ui horizontal divider header">
            <i class="lock icon"></i>
            Mot de passe
          </h4>
          <form id="form-password" class="ui form" action="/Controllers/profil.php" method="post">
            <div class="field">
              <label>Mot de passe actuel</label>
              <input name="pass_actuel" type="password">
            </div>
            <div class="field">
              <label>Nouveau mot de passe</label>
              <input name="password" type="password">
            </div>
            <div class="field">
              <label>Confirmation</label>
              <input name="password2" type="password">
            </div>
            <button class="ui submit right labeled icon green button">
              <i class="save icon"></i>
              Changer le mot de passe
            </button>
            <div class="ui error message"></div>
          </form>
          <h4 class="ui horizontal divider header">
            <i class="mail icon"></i>
            Adresse Mail
          </h4>
          <form id="form-email" class="ui form">
            <div class="field">
              <label>Adresse mail</label>
              <input name="mail" type="email" value=<?=$_SESSION['mail'] ?> readonly>
            </div>
          </form>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
  <script src="../Controllers/form_infosperso_validation.js"></script>
  <script src="../Controllers/form_password_validation.js"></script>
</html>
