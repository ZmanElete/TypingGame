<?php 
    session_start();
    include_once('../consts/dbConsts.php');

    // if(isset($_GET['username'])){

        $_SESSION['username']=$_GET['username'];

        $sql = "INSERT INTO `names`  (username, password, salt) VALUES('".$_SESSION['username']."', '".$_GET['hash']."','".$_GET['salt']."')";

        $result = $conn->query($sql);

        if (!$result) {
            echo "No Results";
        }
        else{
            $_SESSION['page'] = "play";
        }
    // } else {
    //     echo "No username";
    // }
    
?>