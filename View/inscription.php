<?php
require_once('../Models/cirModel.php');
require_once('../Controllers/getPromos.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main class="ui container padding-top-10">
        <article class="ui raised tertiary blue inverted segment">
          <h1 class="ui center dividing aligned header"><i class="user icon"></i> Inscription</h1>
          <form id="form-inscription" class="ui form" action="/Controllers/inscription.php" method="post">
            <div class="field">
              <label>Nom d'utilisateur</label>
              <input name="login" type="text">
            </div>
            <div class="field">
              <label>Mot de passe</label>
              <input name="password" type="password">
            </div>
            <div class="field">
              <label>Confirmation</label>
              <input name="password2" type="password">
            </div>
            <div class="field">
              <label>Adresse mail</label>
              <input name="mail" type="email">
            </div>
            <div class="field">
              <label>Promo</label>
              <select class="ui dropdown" name="promo">
                <option value="">Select</option>
                <?php
                  foreach ($promos as $promo) {
                    echo '<option value='.$promo['nom_promo'].'>'.$promo['nom_promo'].'</option>';
                  }
                ?>
              </select>
            </div>
            <button class="ui submit right labeled icon green button">
              <i class="sign in icon"></i>
              S'inscrire
            </button>
            <div class="ui error message"></div>
          </form>
        </article>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
  <script src="../Controllers/form_inscription_validation.js"></script>
</html>
