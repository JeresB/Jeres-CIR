<?php
require_once('../Models/cirModel.php');
session_start();

$gestion_bdd = new BDD_CIR();

$notes = $gestion_bdd->getNotes($_SESSION['nom'], $_SESSION['prenom']);

$physique = 0;
$anglais = 0;
$maths = 0;
$linux_admin = 0;
$xml = 0;
$design_pattern = 0;
$cisco = 0;
$python = 0;
$secu_info = 0;
$framework = 0;
$economie = 0;
$contrat_moral = 0;
$stage = 0;
$fpga_vhdl = 0;
$ela = 0;
$projet_smp = 0;
$projet_csi3 = 0;
$smp = 0;
$shell = 0;

foreach ($notes as $note) {
  switch ($note['matiere']) {
    case 'Physique':
      if ($physique == 0) $physique = $note['note'];
      else $physique = ($physique + $note['note']) / 2;
      break;
    case 'Anglais':
      if ($anglais == 0) $anglais = $note['note'];
      else $anglais = ($anglais + $note['note']) / 2;
      break;
    case 'Maths':
      if ($maths == 0) $maths = $note['note'];
      else $maths = ($maths + $note['note']) / 2;
      break;
    case 'Linux Administrateur':
      if ($linux_admin == 0) $linux_admin = $note['note'];
      else $linux_admin = ($linux_admin + $note['note']) / 2;
      break;
    case 'XML':
      if ($xml == 0) $xml = $note['note'];
      else $xml = ($xml + $note['note']) / 2;
      break;
    case 'Design Pattern':
      if ($design_pattern == 0) $design_pattern = $note['note'];
      else $design_pattern = ($design_pattern + $note['note']) / 2;
      break;
    case 'Cisco':
      if ($cisco == 0) $cisco = $note['note'];
      else $cisco = ($cisco + $note['note']) / 2;
      break;
    case 'Python':
      if ($python == 0) $python = $note['note'];
      else $python = ($python + $note['note']) / 2;
      break;
    case 'Sécurité Informatique':
      if ($secu_info == 0) $secu_info = $note['note'];
      else $secu_info = ($secu_info + $note['note']) / 2;
      break;
    case 'Framework':
      if ($framework == 0) $framework = $note['note'];
      else $framework = ($framework + $note['note']) / 2;
      break;
    case 'Economie':
      if ($economie == 0) $economie = $note['note'];
      else $economie = ($economie + $note['note']) / 2;
      break;
    case 'Contrat Moral':
      if ($contrat_moral == 0) $contrat_moral = $note['note'];
      else $contrat_moral = ($contrat_moral + $note['note']) / 2;
      break;
    case 'Rapport de stage et soutenance':
      if ($stage == 0) $stage = $note['note'];
      else $stage = ($stage + $note['note']) / 2;
      break;
    case 'FPGA-VHDL':
      if ($fpga_vhdl == 0) $fpga_vhdl = $note['note'];
      else $fpga_vhdl = ($fpga_vhdl + $note['note']) / 2;
      break;
    case 'ELA 1':
      if ($ela == 0) $ela = $note['note'];
      else $ela = ($ela + $note['note']) / 2;
      break;
    case 'Projet SMP':
      if ($projet_smp == 0) $projet_smp = $note['note'];
      else $projet_smp = ($projet_smp + $note['note']) / 2;
      break;
    case 'Projet CSI3':
      if ($projet_csi3 == 0) $projet_csi3 = $note['note'];
      else $projet_csi3 = ($projet_csi3 + $note['note']) / 2;
      break;
    case 'SMP':
      if ($smp == 0) $smp = $note['note'];
      else $smp = ($smp + $note['note']) / 2;
      break;
    case 'Shell':
      if ($shell == 0) $shell = $note['note'];
      else $shell = ($shell + $note['note']) / 2;
      break;
    default:
      break;
  }
}

$coeff_total = 0;
$note_total = 0;

if ($physique != 0) {
  $physique = $physique * 7;
  $coeff_total += 7;
  $note_total += $physique;
}
if ($anglais != 0) {
  $anglais = $anglais * 5;
  $coeff_total += 5;
  $note_total += $anglais;
}
if ($maths != 0) {
  $maths = $maths * 12;
  $coeff_total += 12;
  $note_total += $maths;
}
if ($linux_admin != 0) {
  $linux_admin = $linux_admin * 7;
  $coeff_total += 7;
  $note_total += $linux_admin;
}
if ($xml != 0) {
  $xml = $xml * 3;
  $coeff_total += 3;
  $note_total += $xml;
}
if ($design_pattern != 0) {
  $design_pattern = $design_pattern * 3;
  $coeff_total += 3;
  $note_total += $design_pattern;
}
if ($cisco != 0) {
  $cisco = $cisco * 12;
  $coeff_total += 12;
  $note_total += $cisco;
}
if ($python != 0) {
  $python = $python * 2;
  $coeff_total += 2;
  $note_total += $python;
}
if ($secu_info != 0) {
  $secu_info = $secu_info * 3;
  $coeff_total += 3;
  $note_total += $secu_info;
}
if ($framework != 0) {
  $framework = $framework * 6;
  $coeff_total += 6;
  $note_total += $framework;
}
if ($economie != 0) {
  $economie = $economie * 3;
  $coeff_total += 3;
  $note_total += $economie;
}
if ($contrat_moral != 0) {
  $contrat_moral = $contrat_moral * 2;
  $coeff_total += 2;
  $note_total += $contrat_moral;
}
if ($stage != 0) {
  $stage = $stage * 13;
  $coeff_total += 13;
  $note_total += $stage;
}
if ($fpga_vhdl != 0) {
  $fpga_vhdl = $fpga_vhdl * 6;
  $coeff_total += 6;
  $note_total += $fpga_vhdl;
}
if ($ela != 0) {
  $ela = $ela * 15;
  $coeff_total += 15;
  $note_total += $ela;
}
if ($projet_smp != 0) {
  $projet_smp = $projet_smp * 8;
  $coeff_total += 8;
  $note_total += $projet_smp;
}
if ($projet_csi3 != 0) {
  $projet_csi3 = $projet_csi3 * 13;
  $coeff_total += 13;
  $note_total += $projet_csi3;
}
if ($smp != 0) {
  $smp = $smp * 6;
  $coeff_total += 6;
  $note_total += $smp;
}
if ($shell != 0) {
  $shell = $shell * 3;
  $coeff_total += 3;
  $note_total += $shell;
}


if($coeff_total != 0) {
  $moyenne = $note_total / $coeff_total;
  $moyenne = number_format($moyenne, 2);
}
else $moyenne = 'x';
?>
