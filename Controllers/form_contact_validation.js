$('#form-add_note').form({
  on: 'blur',
  fields: {
    mail: {
      identifier  : 'mail',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez une adresse mail !'
        },
        {
          type   : 'email',
          prompt : 'L\'adresse mail doit être valide !'
        }
      ]
    },
    objet: {
      identifier  : 'objet',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez un objet !'
        }
      ]
    },
    message: {
      identifier  : 'message',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez un message !'
        }
      ]
    }
  }
});
