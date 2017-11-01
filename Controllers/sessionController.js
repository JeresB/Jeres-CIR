$( document ).ready(function() {

  // Affichage de la pop-up de connexion
  $("#link-connexion").click(function() {
    $.dialog({
      title: 'Connexion',
      content: '<form action="/Controllers/connexion.php" method="post">' +
        '<div class="form-group">' +
          '<label for="login">Nom d\'utilisateur</label>' +
          '<input type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" placeholder="Login" required>' +
          '<small id="loginHelp" class="form-text text-muted">Nom ou adresse mail</small>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="password">Mot de passe</label>' +
          '<input type="password" class="form-control" id="password" placeholder="Password" required>' +
        '</div>' +
        '<button type="submit" class="btn btn-primary btn-block">Se connecter <i class="fa fa-sign-in" aria-hidden="true"></i></button>' +
      '</form>'
    });
  });

  // Affichage de la pop-up d'inscription
  $("#link-inscription").click(function() {
    $.dialog({
      title: 'Inscription',
      content: '<form action="/Controllers/inscription.php" method="post">' +
        '<div class="form-group">' +
          '<label for="nom">Nom</label>' +
          '<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="prenom">Prenom</label>' +
          '<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="password">Mot de passe</label>' +
          '<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="password2">Répéter le mot de passe</label>' +
          '<input type="password" class="form-control" id="password2" name="password2" placeholder="Password" required>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="mail">Adresse mail</label>' +
          '<input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>' +
        '</div>' +
        '<button type="submit" class="btn btn-primary btn-block">S\'inscrire <i class="fa fa-check" aria-hidden="true"></i></button>' +
      '</form>'
    });
  });

  // Redirection vers la page de deconnexion
  $("#link-deconnexion").click(function() {
    document.location.href="/Controllers/deconnexion.php"
  });

});
