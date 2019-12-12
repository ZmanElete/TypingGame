<?php 
    session_start();
    $_SESSION['page'] = "game";
    header("Location:../index.php");
?>