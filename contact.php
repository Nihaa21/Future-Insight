<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7272020985.js" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>


</head>


<body>

  <div class="container-top">
    <div class="fade-background">

      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container" style="margin-top:0;">
          <a href="#" class="navbar-brand "> <img class="logo" src="images/logo.png" alt="logo"> </a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars bars"></i></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="main.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="education.php" class="nav-link">Education</a></li>
              <li class="nav-item"><a href="women.php" class="nav-link">Women</a></li>
              <li class="nav-item"><a href="old-age.php" class="nav-link">Old-Age Home</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

              <?php session_start();?>

                            <li class="nav-item font-weight-bold ml-5 "><a class="nav-link ">
                              <?php
                            if(isset($_SESSION['username'])){
                                echo " Welcome, ", $_SESSION['username']," !"; }?></a>
                            </li>


              <a href="index.php"><button type="button" class="btn btn-sm btn-danger logout-btn" data-toggle="modal" data-target="#signup">Logout
                </button></a>

            </ul>
          </div>
        </div>
      </nav>
      <div class="top-text">

        <p style="font-size: 40px;"><strong>We'd like to hear from you</strong></p>
        <p >We're here for you. If you have any other questions,please let us know.</p>

      </div>
    </div>
  </div>

  <h3 class="contact-content">Contact us </h3>

<div class="container-fluid contact">

  <div class="row">
    <div class="col-lg-6 ">
        <h4 class="form-heading">Send your request</h4>

        <form action="contactdata.php" method="post">
          <table>
            <tr>
              <td><input type="text" name="name" value size="40" placeholder="Your name*" /></td>
              <td><input type="text" name="email" value size="40" placeholder="Your email*" />  </td>
            </tr>

            <tr>
              <td><input type="text" name="subject" value size="40" placeholder="Subject*" /></td>
              <td><input type="text" name="mobileno" value size="40" placeholder="Mobile no*" /></td>
            </tr>

            <tr class="message-area">
              <td><textarea rows="10"  cols="35" name="message" placeholder="Your message*"></textarea>
              <button type="submit" style="color:white;">SEND MESSAGE</button>
              </td>
            </tr>
          </table>
          </form>

          </div>

    <div class="col-lg-6 ">
      <div class="vl-reach">
      <h2 class="reach">Reach us</h2>
      </div>
      <div class="details">
          <p><i class="fas fa-map-marker-alt"> </i>#111,groundfloor,abc</p>
          <p><i class="fas fa-envelope"></i>contactus@email.com</p>
          <p> <i class="fas fa-phone-alt"></i>9619286728</p>
      </div>
    </div>




  </div>
</div>

<div class="map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.5305931061603!2d73.0577343150064!3d19.040395258038338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c23c0d76935f%3A0xdc48e289b198623a!2sSaraswati%20College%20of%20Engineering%2C%20Kharghar!5e0!3m2!1sen!2sin!4v1598551556478!5m2!1sen!2sin"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



</div>


<footer>
   <img src="images/logo.png" class="logo-bottom"alt="">
   <h6 style="margin-top:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
   <div class="links">
     <a href="https://www.facebook.com/meehir.mhatre?ref=bookmarks"><i class="fab fa-facebook social fa-2x icon1"></i></a>
     <a href="https://www.instagram.com/themeehirmhatre/"><i class="fab fa-instagram social fa-2x icon1"></i></a>
     <a href="https://twitter.com/BillGates?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab icon1 fa-twitter social fa-2x"></i></a>
     <a href="mailto:meehirmhatre1234@gmail.com"><i class="fas fa-envelope social fa-2x"></i></a>
   </div>
</footer>



<p class="write">© Copyright 2018 Future In Sight.</p>




<script src="app.js" charset="utf-8"></script>





</body>

</html>
