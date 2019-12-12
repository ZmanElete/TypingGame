<?php 
    session_start();
    $_SESSION['page'] = "create";
    header("Location: /index.php");
?>