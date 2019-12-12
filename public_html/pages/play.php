<style>
    div.start-menu{
        display: flex;
        flex-direction:column;

        width: 500px;

        margin: auto;
    }
    button.play-button{
        height: 200px;
        font-size:20px;
    }
</style>
<div class="start-menu">
    <button class="play-button" onclick="location.href='./commands/cmdGame.php'">Start</button>
    <button class="play-button" onclick="location.href='./commands/cmdLeaderboard.php'">Leaderboards</button>
    <button class="play-button" onclick="location.href='./commands/cmdLogOut.php'">Log out</button>
</div>