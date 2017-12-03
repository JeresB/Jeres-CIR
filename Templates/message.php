<?php
if(isset($_SESSION['success'])) {
  ?>
  <script type="text/javascript">
    $.uiAlert({
      textHead: '<?=$_SESSION["success"] ?>',
      text: '',
      bgcolor: '#19c3aa',
      textcolor: '#fff',
      position: 'top-right',
      icon: 'checkmark box',
      time: 3,
    })
  </script>
  <?php
} else if(isset($_SESSION['erreur'])) {
  ?>
  <script type="text/javascript">
    $.uiAlert({
      textHead: '<?=$_SESSION["erreur"] ?>',
      text: '',
      bgcolor: '#DB2828',
      textcolor: '#fff',
      position: 'top-right',
      icon: 'remove circle',
      time: 3,
    })
  </script>
  <?php
}

unset($_SESSION['erreur']);
unset($_SESSION['success']);
?>
