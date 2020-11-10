<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Future In Sight</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
  </head>
  <body>

    <div class="background-login">

<div class="logo">
  <img src="images/logo.png" alt="">
  <!-- <h5 class="text-white">Small effort , Make big change.</h5> -->
</div>



      <div class="login-form">

      <h2>Login</h2>
      <?php
      if (isset($_GET['message'])){
        $message=$_GET['message'];
        echo $message;
      }
       ; ?>
      <form class="" action="loginval.php" method="post">



        <div class="inputs">
          <label for="username"> Username:</label>
            <input type="text" name="username" class="textInput" value="" id="username">
        </div>

    <div class="inputs">
      <label for="pass">Password:</label>
        <input type="password" name="password" class="textInput" value="" id="pass">
    </div>


      <div class="login-btn">
          <input type="submit" class="btn btn-danger btn-md"  name="login_btn" value="Login">
      </div>


      </form>




<div class="signup-link">
   <p>New user? <a href="register.php">Signup</a></p>
</div>

  </div>

</div>
  </body>
</html>
