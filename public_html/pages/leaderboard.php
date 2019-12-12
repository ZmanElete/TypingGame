<table>
    <tbody id="table-body">
        <tr>
            <th colspan ="2">Leaderboard</th>
        </tr>
        <tr id="end-of-list">
            <td colspan ="2">
                <button onclick="location.href='./commands/cmdGame.php'">Play Again</button>
            </td>
        </tr>
        <tr>
            <td  colspan ="2">
                <button onclick="location.href='./commands/cmdLogOut.php'">Log Out</button>
            </td>
        </tr>
    </tbody>
</table>
<style>
    table{
        margin:auto;
        margin-top:65px;
        width:40%;
    }
    td, th, tr, table{
        border: 1px black solid;
        border-collapse: collapse;
    }
    th{
        font-size:30px;
        height: 40px;
    }
    td{
        font-size:20px;
        height:30px;
        text-align:center;
    }
    button{
        width:95%;
        height:90%;
        margin:2.5%;
    }
</style>
<script type="text/javascript" src="../scripts/leaderboard.js"></script>


