<?php 
    include_once("./consts/dbConsts.php");
    if($_SESSION['page'] == 'username'){
        $sql = "SELECT `word` FROM `words` ORDER BY rand() LIMIT 2000";

        $result = $conn->query($sql);
        if (!$result) {
            echo "No Results";
        }
        else{
            while($row = mysqli_fetch_assoc($result)) {
                $json_array[] = $row;
            }
            $tmp = json_encode($json_array);
        }
    }
?>
<script>
    <?php 
    if($_SESSION['page'] == 'username')
        echo ("localStorage.setItem('words', '$tmp')");
    ?>
</script>