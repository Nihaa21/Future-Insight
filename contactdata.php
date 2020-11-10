<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
  echo"Connection successfull";

}else{
  echo"No connection";
}


mysqli_select_db($con, 'futureinsight');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mobileno = $_POST['mobileno'];
$message = $_POST['message'];

$query ="insert into contacts(name, email, subject, mobileno, message)
values('$name','$email','$subject','$mobileno','$message')";


mysqli_query($con, $query);
header('location:contact.php');


 ?>
