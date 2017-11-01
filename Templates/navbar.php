<?php require_once('../Controllers/navbarController.php'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">ENT CIR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php
      if ($connected) {
        echo '<span class="navbar-text">
                Bonjour '.$_SESSION["prenom"].'
              </span>
              &nbsp;&nbsp;
              <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-sign-out" aria-hidden="true"></i></button>';
      }
      else {
        echo '<li class="nav-item">
                <a id="link-connexion" class="nav-link" href="#">Connexion</a>
              </li>
              <li class="nav-item">
                <a id="link-inscription" class="nav-link" href="#">Inscription</a>
              </li>';
      }
      ?>
    </ul>
  </div>
</nav>
