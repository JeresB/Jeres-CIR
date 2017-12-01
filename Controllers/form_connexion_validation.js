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
