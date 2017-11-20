<?php
require_once('../Models/cirModel.php');
require_once('../Helpers/matiere_var.php');

include_once('../Controllers/notesController.php');
?>

<!doctype html>
<html lang="fr">
  <?php include_once('../Templates/head.html'); ?>
  <body>
      <?php include_once('../Templates/navbar.php'); ?>
      <?php include_once('../Templates/message.php'); ?>
      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
              <div class="card-header text-center">Ajouter une note</div>
              <div class="card-body">
                <p class="card-text">
                  <form action="/Controllers/add_note.php" method="post">
                    <div class="form-group">
                      <label for="matiere">Matiere</label>
                      <select class="form-control" id="matiere" name="matiere">
                        <option value=""></option>
                        <?php
                        foreach (MATIERES as $matiere) {
                          echo '<option value="'.$matiere.'">'.$matiere.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note sur 20</label>
                      <input type="number" step="0.01" class="form-control" id="note" name="note" placeholder="20">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-default btn-block">Ajouter</button>
                  </form>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
              <div class="card-header text-center">Liste des notes</div>
              <div class="card-body">
                <p class="card-text">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Matière</th>
                        <th>Note</th>
                        <th>Effacer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($notes as $note) {
                        echo '<tr>
                                <td>'.$note['matiere'].'</td>
                                <td>'.$note['note'].'</td>
                                <td>
                                  <form action="/Controllers/delete_note.php" method="post">
                                    <input type="hidden" name="id_note" value="'.$note['id'].'">
                                    <button type="submit" class="btn btn-danger btn-sm float-right" style="margin-bottom: 2px;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                  </form>
                                </td>
                              </tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-<?php if($moyenne >= 12) echo 'success'; else if($moyenne >= 11.5) echo 'warning'; else echo 'danger'; ?> mb-3">
              <div class="card-header text-center">Calcul</div>
              <div class="card-body">
                <p class="card-text">
                  Moyenne générale : <strong><?=$moyenne ?></strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
  <?php include_once('../Templates/footer.html'); ?>
</html>
