<?php 
    session_start();
    
    include_once('../consts/dbConsts.php');

    $score = $_GET['score'];
    echo $score;
    $username = $_SESSION['username'];
    echo $username;

    $sql = "INSERT INTO `highScore` (username, score) VALUES('".$username."', '".$score."')"; 

    $result = $conn->query($sql);
    if (!$result) {
        echo "No Scores Result";
    }
    else{
        
    }
?>