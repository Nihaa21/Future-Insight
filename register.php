<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Future In Sight</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/register.css">
  </head>
  <body>

    <div class="background-login">

<div class="logo">
  <img src="images/logo.png" alt="">
  <!-- <h5 class="text-white">Small effort , Make big change.</h5> -->
</div>



      <div class="login-form">

      <h2>Register</h2>
      <?php
      if (isset($_GET['message'])){
        $message=$_GET['message'];
        echo $message;
      }
       ; ?>


      <form class="" action="registerinfo.php" method="post">


  <table>

    <tr>
         <td>Username:</td>
        <td><input type="text" name="username" class="textInput" value="" required></td>
    </tr>

   <tr>
       <td>Email:</td>
       <td><input type="email" name="email" class="textInput" value="" required></td>
   </tr>

   <tr>
     <td>Password</td>
     <td>  <input type="password" name="password" class="textInput" value="" required></td>
   </tr>

<tr>
  <td>Confirm password:</td>
  <td>  <input type="password" name="password2" class="textInput" value="" required></td>
</tr>






</table>
<div class="regi-btn">
    <button type="submit" class="btn btn-danger btn-md "  name="register_btn" value="Register">Register</button>
</div>

      </form>




<div class="signup-link">
   <p>Already Registered?<a href="index.php"> Login</a> </p>
</div>

  </div>

</div>
  </body>
</html>
