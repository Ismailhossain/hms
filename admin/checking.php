<?php
@session_start();
if ($_SESSION['logged_in'] != "yes") {
    header('location:login.php');
}
?>