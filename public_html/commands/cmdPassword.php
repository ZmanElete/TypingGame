<?php 
    session_start();
    include_once('../consts/dbConsts.php');


    $sql = "SELECT * FROM `names` WHERE username = '" . $_SESSION['username'] . "' AND password='" . $_GET['hash'] . "'";
    
    $result = $conn->query($sql);
    
    if (!$result) {
        echo "No Results";
    }
    else{
        $row = mysqli_fetch_array( $result );
        if ($row[0]){
            
            $_SESSION['page'] = "play";
        }
    }
    
?>
