<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['connected'])) $connected = $_SESSION['connected'];
else $connected = false;

?>
