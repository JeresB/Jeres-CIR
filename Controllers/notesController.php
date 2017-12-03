<?php
// --------------------- CALCUL MOYENNE GENERALE -------------------------------
$moyenne = 'X';
$somme = 0;
$coeff_total = 0;
foreach ($noteees as $note) {
  $somme += $note['note'] * $note['coeff_note'] * $note['coeff_matiere'];

  $coeff = $note['coeff_note'] * $note['coeff_matiere'];
  $coeff_total += $coeff;
}
if ($coeff_total != 0) {
  $moyenne = $somme / $coeff_total;
  $moyenne = round($moyenne, 2);
}
// -----------------------------------------------------------------------------

// --------------------- CALCUL MOYENNE PAR MATIERES ---------------------------
$moyenneByMatiere = array();

foreach ($matieres as $matiere) {
  $noteByMatiere = $gestion_bdd->getNoteByMatiere($_SESSION['surnom'], $_SESSION['mail'], $matiere['id']);

  if (count($noteByMatiere) > 0) {
    $moyenneTempo = 'X';
    $somme = 0;
    $coeff_total = 0;
    foreach ($noteByMatiere as $note) {
      $somme += $note['note'] * $note['coeff_note'] * $matiere['coeff_matiere'];

      $coeff = $note['coeff_note'] * $matiere['coeff_matiere'];
      $coeff_total += $coeff;
    }

    $moyenneTempo = $somme / $coeff_total;
    $moyenneTempo = round($moyenneTempo, 2);

    $moyenneByMatiere[] = array(
      "nom_matiere" => $matiere['nom_matiere'],
      "coeff_matiere" => $matiere['coeff_matiere'],
      "seuil" => $matiere['seuil'],
      "moyenne_matiere" => $moyenneTempo);
  }
}


// -----------------------------------------------------------------------------


// --------------------- CALCUL MOYENNE PAR MODULES ----------------------------
$moyenneByModule = array();

foreach ($modules as $module) {
  $matiereByModule = $gestion_bdd->getMatiereByModule($module['id']);

  if (count($matiereByModule) > 0) {
    $moyenneTempo = 'X';
    $somme = 0;
    $coeff_total = 0;
    $add = false;
    foreach ($matiereByModule as $matiere) {
      foreach ($moyenneByMatiere as $note) {
        if ($matiere['nom_matiere'] == $note['nom_matiere']) {
          $add = true;
          $somme += $note['moyenne_matiere'] * $note['coeff_matiere'];

          $coeff = $note['coeff_matiere'];
          $coeff_total += $coeff;
        }
      }
    }

    if($add) {
      $moyenneTempo = $somme / $coeff_total;
      $moyenneTempo = round($moyenneTempo, 2);

      $moyenneByModule[] = array(
        "nom_module" => $module['nom_module'],
        "ects" => $module['ects'],
        "seuil_ects" => $module['seuil_ects'],
        "moyenne_module" => $moyenneTempo);
    }
    $add = false;
  }
}

// -----------------------------------------------------------------------------
?>
