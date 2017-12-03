<?php
require_once('../Controllers/navbarController.php');

if (!$connected) {
  header('Location: /View');
}
require_once('../Models/cirModel.php');
require_once('../Helpers/matiere_var.php');
require_once('../Controllers/getMatieres.php');
require_once('../Controllers/getNotes.php');
require_once('../Controllers/getModules.php');
include_once('../Controllers/notesController.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <main>
        <div class="ui fluid container">
          <h1 class="ui center dividing aligned header"><i class="graduation cap icon"></i> Notes</h1>
          <div class="ui five column grid">
            <div class="four wide column">
              <div class="min-height-350 ui tall stacked green inverted segment">
                <h4 class="ui center aligned dividing header">Ajouter une note</h4>
                <form id="form-add_note" class="ui form" action="/Controllers/add_note.php" method="post">
                  <div class="field">
                    <label>Note sur 20</label>
                    <input name="note" type="number" step="0.01" placeholder="20">
                  </div>
                  <div class="field">
                    <label>Coefficient (optionnel)</label>
                    <input name="coeff" type="number" step="0.01" placeholder="1 par défaut" value=1>
                  </div>
                  <div class="field">
                    <label>Matière</label>
                    <select class="ui dropdown" name="matiere">
                      <option value="">Select</option>
                      <?php
                        foreach ($matieres as $matiere) {
                          echo '<option value='.$matiere['id'].'>'.$matiere['nom_matiere'].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <button class="ui submit right labeled icon button">
                    <i class="add icon"></i>
                    Ajouter
                  </button>
                  <div class="ui error message"></div>
                </form>
              </div>
            </div>
            <div class="eight wide column">
              <div class="min-height-350 ui tall stacked blue inverted segment">
                <h4 class="ui center aligned dividing header">Liste des notes</h4>
                <table class="ui inverted blue table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Matière</th>
                      <th>Note</th>
                      <th>Coefficient (1 => note /20)</th>
                      <th>Effacer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $nb = 1;
                      foreach ($noteees as $note) {
                        echo '<tr>
                                <td>'.$nb.'</td>
                                <td>'.$note['nom_matiere'].'</td>
                                <td>'.$note['note'].'</td>
                                <td>'.$note['coeff_note'].'</td>
                                <td>
                                <form id="form-delete_note" class="marge-bot-0 ui form" action="/Controllers/delete_note.php" method="post">
                                  <input name="id_note" type="hidden" value="'.$note['id'].'">
                                  <button class="ui submit right labeled icon red button">
                                    <i class="trash icon"></i>
                                    Supprimer
                                  </button>
                                </form>
                                </td>';
                        $nb = $nb + 1;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="four wide column">
              <div class="min-height-350 ui center aligned tall stacked <?php if($moyenne == 'X') echo 'olive'; else if($moyenne >= 12) echo 'green'; else if($moyenne >= 11.5) echo 'orange'; else echo 'red'; ?> inverted segment">
                <h4 class="ui dividing header">Moyenne générale actuelle</h4>
                <h5 class="ui header">Moyenne : <?=$moyenne ?>/20</h5>
              </div>
            </div>
            <div class="eight wide column">
              <div class="ui tall stacked teal inverted segment">
                <h4 class="ui center aligned dividing header">Moyenne par matières</h4>
                <table class="ui inverted teal table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Matière</th>
                      <th>Moyenne</th>
                      <th>Coefficient</th>
                      <th>Seuil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $nb = 1;
                      foreach ($moyenneByMatiere as $matiere) {
                        if($matiere['moyenne_matiere'] >= $matiere['seuil']) {
                          $td = '<td><i class="checkmark icon"></i> ';
                          $tr = '<tr class="good">';
                        } else {
                          $td = '<td><i class="close icon"></i> ';
                          $tr = '<tr class="bad">';
                        }
                        echo $tr.'<td>'.$nb.'</td>
                                <td>'.$matiere['nom_matiere'].'</td>'.
                                $td.''.$matiere['moyenne_matiere'].'</td>
                                <td>'.$matiere['coeff_matiere'].'</td>
                                <td>'.$matiere['seuil'].'</td>';
                        $nb = $nb + 1;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="eight wide column">
              <div class="ui tall stacked teal inverted segment">
                <h4 class="ui center aligned dividing header">Moyenne par modules</h4>
                <table class="ui inverted teal table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Module</th>
                      <th>Moyenne</th>
                      <th>Seuil ECTS</th>
                      <th>ECTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $nb = 1;
                      foreach ($moyenneByModule as $module) {
                        if($module['moyenne_module'] >= $module['seuil_ects']) {
                          $td = '<td><i class="checkmark icon"></i> ';
                          $tr = '<tr class="good">';
                        } else {
                          $td = '<td><i class="close icon"></i> ';
                          $tr = '<tr class="bad">';
                        }
                        echo $tr.'<td>'.$nb.'</td>
                                <td>'.$module['nom_module'].'</td>'.
                                $td.''.$module['moyenne_module'].'</td>
                                <td>'.$module['seuil_ects'].'</td>
                                <td>'.$module['ects'].'</td>';
                        $nb = $nb + 1;
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
  <?php include_once('../Templates/message.php'); ?>
  <script src="../Controllers/form_addnote_validation.js"></script>
</html>
