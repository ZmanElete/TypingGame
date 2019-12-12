<!-- Getting words for the game. -->
<?php 
  include_once("./commands/cmdWords.php");
?>

<!-- Validation Scripts -->
<script type="text/javascript" src="../scripts/sha256.js"></script>
<script type="text/javascript" src="../scripts/password.js"></script>

<link rel="stylesheet" type="text/css" href="../styles/forms.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <h3>Login</h3>
    </div>

    <!-- Login Form -->
    <form action="javascript:void(0);" >
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
      <input type="text" id="password" class="fadeIn third" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In" onclick="Validate()">
    </form>

    <!-- Create User -->
    <div id="formFooter">
      <a class="underlineHover" href="commands/cmdGoToCreate.php">Create User</a>
    </div>
  </div>
</div>
