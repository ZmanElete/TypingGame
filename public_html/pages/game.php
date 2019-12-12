<style>
    table{
        margin-top:65px;
        width:100%;
        padding-bottom: 750px;
        border: 1px black solid;
    }
    td{
        position:relative;
        width:20%;
        text-align:center;
        font-size:40px;
        vertical-align:top;
        
        transition-duration: .21s;
        transition-timing-function: ease;
    }
    span.typed{
        font-weight:bold;
        
    }
    #timer{
        position:fixed;
        top:10px;
        right:10px;
        font-size:40px;
    }

    #logout{
        position:fixed;
        top:10px;
        left:10px;
        font-size:30px;
    }
</style>
<button id="logout" onclick="location.href='./commands/cmdLogOut.php'">Log Out</button>
<div id="timer">
    0.00.00
</div>
<table>
    <tr>
        <td id="first">
            <span class="typed"></span><span class="not-typed"></span>
        </td>

        <td id="second">
            <span class="typed"></span><span class="not-typed"></span>
        </td>

        <td id="third">
            <span class="typed"></span><span class="not-typed"></span>
        </td>

        <td id="fourth">
            <span class="typed"></span><span class="not-typed"></span>
        </td>

        <td id="fifth">
            <span class="typed"></span><span class="not-typed"></span>
        </td>
    </tr>
</table>
<script type="text/javascript" src="../scripts/game.js"></script>
<script>
    init();
</script>