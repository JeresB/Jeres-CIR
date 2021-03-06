$( document ).ready(function() {

  // Affichage de la pop-up de connexion
  $("#link-connexion").click(function() {
    $.dialog({
      title: 'Connexion',
      theme: 'material',
      useBootstrap: false,
      backgroundDismiss: true,
      content: '<form id="form-connexion" class="ui form" action="/Controllers/connexion.php" method="post">' +
                  '<div class="field">' +
                    '<label>Nom d\'utilisateur / Email</label>' +
                    '<input name="login" type="text">' +
                  '</div>' +
                  '<div class="field">' +
                    '<label>Mot de passe</label>' +
                    '<input name="password" type="text">' +
                  '</div>' +
                  '<button class="ui submit button" type="submit">Se connecter <i class="sign in icon"></i></button>' +
                  '<div class="ui error message"></div>' +
                '</form>'
    });

  });

  $('#form-connexion').form({
    on: 'blur',
    fields: {
      login: {
        identifier  : 'login',
        rules: [
          {
            type   : 'empty',
            prompt : 'Entrez votre nom d\'utilisateur !'
          }
        ]
      },
      password: {
        identifier  : 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Entrez votre mot de passe !'
          }
        ]
      }
    }
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
