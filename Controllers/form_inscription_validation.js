$('#form-inscription').form({
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
    },
    password2: {
      identifier  : 'password2',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez la confirmation du mot de passe !'
        },
        {
          type   : 'match[password]',
          prompt : 'Les 2 mots de passe ne sont pas identiques !'
        }
      ]
    },
    mail: {
      identifier  : 'mail',
      rules: [
        {
          type   : 'email',
          prompt : 'Votre adresse mail est incorrecte !'
        }
      ]
    },
    promo: {
      identifier  : 'promo',
      rules: [
        {
          type   : 'empty',
          prompt : 'Veuillez choisir une promo !'
        }
      ]
    }
  }
});
