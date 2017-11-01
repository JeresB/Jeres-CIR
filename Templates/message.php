<?php
if(isset($_SESSION['success'])) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          '.$_SESSION["success"].'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
} else if(isset($_SESSION['erreur'])) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Attention !</strong> '.$_SESSION["erreur"].'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}

unset($_SESSION['erreur']);
unset($_SESSION['success']);
?>
