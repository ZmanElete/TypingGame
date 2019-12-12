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
        <h3></h3>
    </div>

    <!-- Login Form -->
    <form action="javascript:void(0);">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Create User" onclick="CreateUser()">
    </form>

    <!-- Create User -->
    <div id="formFooter">
      <a class="underlineHover" href="commands/cmdLogOut.php">Login</a>
    </div>

  </div>
</div>



