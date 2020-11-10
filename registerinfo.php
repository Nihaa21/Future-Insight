
<?php

  session_start();

  $con = mysqli_connect('localhost','root');
//   if($con)
// {
//   echo "Connection successfull";
//
// }else{
//   echo "No connection";
// }


mysqli_select_db($con, 'futureinsight');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$q = "select * from signinusers where username = '$username' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
  header("Location:register.php?message=<div class='alert alert-danger'>Username already registered.</div>");
}
elseif($password==$password2){
  $sql="insert into signinusers(username, email, password)
  values ('$username', '$email','$password')";
  mysqli_query($con, $sql);
  header('location:index.php');

}
else {
  header("Location:register.php?message=<div class='alert alert-danger'>Passwords Dont Match!</div>");
}



 ?>
