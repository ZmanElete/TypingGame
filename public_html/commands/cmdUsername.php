<?php 
    session_start();
    
    include_once('../consts/dbConsts.php');
    
    $_SESSION['username'] = $_GET['username'];

    $sql = "SELECT salt FROM `names` WHERE username = '" . $_SESSION['username'] . "'";
    $result = $conn->query($sql);
    if (!$result) {
        echo "No Results";
    }
    else{
        while ($row = mysqli_fetch_row($result)){
            $_SESSION['salt'] = $row[0];
        }
        $_SESSION['page'] = "password";
        echo json_encode($_SESSION['salt']);
    }
?>