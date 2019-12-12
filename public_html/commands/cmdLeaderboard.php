<?php 
    session_start();
    include_once('../consts/dbConsts.php');

    $sql = "SELECT username, score FROM `highScore` ORDER BY score desc LIMIT 10";
    $result = $conn->query($sql);
    $tmp = [];
    if (!$result) {
        echo "No Results in high scores";
    }
    else{
        while ($row = mysqli_fetch_row($result)){
            $json_array[] = $row;
        }
        $tmp = json_encode($json_array);
        $_SESSION['page'] = "leaderboard";
    }
?>
<script>
    <?php
        echo ("localStorage.setItem('scores', '$tmp');");
        
    ?>
    location.href='/index.php';
</script>