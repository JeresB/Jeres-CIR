<?php

$moyenne = 'X';
$somme = 0;
$coeff_total = 0;
foreach ($noteees as $note) {
  $somme += $note['note'] * $note['coeff_note'] * $note['coeff_matiere'];

  $coeff = $note['coeff_note'] * $note['coeff_matiere'];
  $coeff_total += $coeff;
}

$moyenne = $somme / $coeff_total;
$moyenne = round($moyenne, 2);
?>
