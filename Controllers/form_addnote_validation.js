$('#form-add_note').form({
  on: 'blur',
  fields: {
    note: {
      identifier  : 'note',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez une note !'
        },
        {
          type   : 'decimal',
          prompt : 'La note doit être un décimal !'
        }
      ]
    },
    coeff: {
      identifier  : 'coeff',
      rules: [
        {
          type   : 'empty',
          prompt : 'Entrez un coeff (1 par defaut) !'
        }
      ]
    },
    matiere: {
      identifier  : 'matiere',
      rules: [
        {
          type   : 'empty',
          prompt : 'Choississez une matière !'
        }
      ]
    }
  }
});
