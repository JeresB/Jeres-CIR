$('#form-password').form({
  on: 'blur',
  fields: {
    pass_actuel: {
      identifier  : 'pass_actuel',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez votre mot de passe actuel !<br>Si vous l\'avez oublié vous pouvez toujours m\'envoyer un mail : boiselet.jeremy@gmail.com<br>Un lien mot de passe oublié sera mis en place prochainement.'
        }
      ]
    },
    password: {
      identifier  : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez votre nouveau mot de passe !'
        },
        {
          type   : 'different[pass_actuel]',
          prompt : 'Le nouveau mot de passe doit être différent de l\'ancien !'
        }
      ]
    },
    password2: {
      identifier  : 'password2',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez la confirmation de votre nouveau mot de passe !'
        },
        {
          type   : 'match[password]',
          prompt : 'Les mots de passe ne sont pas identique !'
        }
      ]
    }
  }
});
