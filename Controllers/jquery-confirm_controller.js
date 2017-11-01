$("#link-connexion").click(function() {
  $.dialog({
    title: 'Connexion',
    content: '' +
    '<form action="/Models/connexion.php" class="formName" method="post">' +
    '<div class="form-group">' +
    '<label>Nom d\'utilisateur</label>' +
    '<input type="text" placeholder="Login" name="login" class="name form-control" required /><br/>' +
    '<label>Mot de passe</label>' +
    '<input type="password" placeholder="Password" name="password" class="name form-control" required /><br/>' +
    '<button type="submit" class="btn btn-primary btn-block">Valider</button>' +
    '</div>' +
    '</form>'
  });
});
