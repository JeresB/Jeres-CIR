$('#form-info_perso').form({
  on: 'blur',
  fields: {
    prenom: {
      identifier  : 'prenom',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez votre nom de famille !'
        }
      ]
    },
    nom: {
      identifier  : 'nom',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez votre prénom !'
        }
      ]
    }
  }
});
