<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <!-- <input type="button" name="logout" value="Log out" 
        onclick="location.href='commands/cmdLogOut.php'"> -->
    <div>
        <?php 
            
            if (!isset($_SESSION['page']) || $_SESSION['page'] == "username" || $_SESSION['page']== "password"){
                $_SESSION['username'] = "";
                $_SESSION['page']     = "username";
                $_SESSION['salt']     = "";
                include_once('./pages/username.php');
            }

            else if ($_SESSION['page'] == "create"){
                include_once('./pages/create.php');
            }

            else if ($_SESSION['page'] == "play"){
                include_once('./pages/play.php');
            }

            else if ($_SESSION['page'] == "game"){
                include_once('./pages/game.php');
            }

            else if ($_SESSION['page'] == "leaderboard"){
                include_once('./pages/leaderboard.php');
            }            
        ?>
    </div>
</html>
