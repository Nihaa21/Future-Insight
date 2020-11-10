<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Women</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/women.css">

  <script src="https://kit.fontawesome.com/7272020985.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



</head>

<body>

  <header>



    <div class="education-top">
      <div class="fade-background">


        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container" style="margin-top:0;">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold"> <img class="logo" src="images/logo.png" alt="logo"> </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="offcanvas-header mt-3">
     <button class="btn btn-outline-danger btn-close float-right"> &times Close </button><br><br><br>
     <h5 class="py-2 brand">Future In Sight</h5>
   </div>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="main.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="education.php" class="nav-link  ">Education</a></li>
                <li class="nav-item"><a href="women.php" class="nav-link  ">Women</a></li>
                <li class="nav-item"><a href="old-age.php" class="nav-link  ">Old-Age Home</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link ">Contact</a></li>

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
          <p class="top-p">Safe sanitation for women.</p>
          <a type="button" href="payment.php"class="btn btn-danger btn-lg top-btn">Donate</a>
          <p class="top-p2">Donations will sponsor sanitary pads for young girls and women</p>
      </div>

      </div>
    </div>



  </header>

  <content>
      <div class="container edu">
        <div class="row">
          <div class="col-lg-6 ">
            <div class="vl">
              <h2 style="margin-left:10px;">Only 36 Percent Women Use Sanitary Pads in India.</h2>
            </div>

            <p>Period poverty affects women and girls all over the India. Access to sanitary products, safe, hygienic spaces in which to use them, and the right to manage menstruation without shame or stigma, is essential for anyone who menstruates.</p>
            <h5>About the cause: Women</h5>
            <p>50% of women in India now believe that the violence inflicted by their partner is 'normal'. Donate to help women fight against violence and stand for their rights and live a dignified and self-sustainable life.
            Help women and girls get access to education, legal support, healthcare, livelihood opportunities so they can be empowered to live a life free from violence and gender discrimination.</p>
          </div>
          <div class="col-lg-6">

            <img class="class-img" src="images/women2.jpeg" alt="">

          </div>
        </div>
      </div>



    <h4 class=" container line">Duis aute irure dolor in reprehenderit laboris nisi </h4>

    <hr  style="height:1.3px;border-width:0;background-color:#f97068 ; width:20%">


    <!-- 1st row of cards -->

    <div class="container">





        <div class="row">

          <div class="col-lg-4 ">

            <div class="card shadow  rounded" style="width:350px;">
              <img class="card-img-top cards-img image" src="images/womencard-1.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Donate sanitary napkins #periodofSharing</h5>
                <p class="card-text">Thousands of women are in need of effective menstrual products. Together we can help make a difference in these women’s lives.</p>

              </div>
            </div>

          </div>


          <div class="col-lg-4">

            <div class="card shadow rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/womencard-2.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Learn about lifesaving hygiene lessons</h5>
                <p class="card-text">Future in site will announce a major expansion of the WASH UP! program designed to empower young children with  sanitation and hygiene habits.</p>

              </div>
            </div>

          </div>

          <div class="col-lg-4 ">

            <div class="card shadow  rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/womencard-3.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">A better place to go:transformation through toilets</h5>
                <p class="card-text">For much of the developing world, a shortage of toilets is not only an inconvenience; it’s a matter of life and death.</p>

              </div>
            </div>
          </div>

        </div>

    </div>




    <!-- 2nd row of cards---->


    <div class="container">

      <div class="education-cards">

        <div class="row">

          <div class="col-lg-4">

            <div class="card shadow  rounded" style="width:350px;">
              <img class="card-img-top cards-img image" src="images/womencard-4.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">EDUCATION</h5>
                <p class="card-text">n the most disadvantaged areas of rural India, poverty and unsuitable installations at schools are some of the reasons why girls do not receive and education or drop out of school at an early age.</p>

              </div>
            </div>

          </div>


          <div class="col-lg-4">

            <div class="card shadow  rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/womencard-5.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Help for domestic violence.</h5>
                <p class="card-text">1 in 3 women worldwide experience physical and/or sexual abuse from their partners (WHO 2017).
        Also during the COVID lockdown reports of domestic violence have increased. </p>

              </div>
            </div>

          </div>

          <div class="col-lg-4">

            <div class="card shadow rounded" style="width:350px ">

              <img class="card-img-top cards-img image" src="images/girl-edu.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Some example text some.</h5>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer lockdown reports of John Doe is an architect John Doe is an architect John Doe is an architect</p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>


    <section id="testimonials">
      <div id="carouselExampleControls" class="testimonials-cover carousel slide " data-ride="carousel" data-interval="1800">
        <div class="carousel-inner">

          <h2 style="padding-top:80px;">What people say?</h2>
          <div class="carousel-item active">
            <img class=" testimonial-imgs " src="press-imgs/niha.png"  alt="">
            <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <em>Pebbles, New York</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <em>Beverly, Illinois</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <em>Beverly, Illinois</em>
          </div>




        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>

        </a>
      </div>

    </section>










  </content>










  <footer>
     <img src="images/logo.png" class="logo-bottom"alt="">
     <h6 style="margin-top:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
     <div class="links">
       <a href="https://www.facebook.com/meehir.mhatre?ref=bookmarks"><i class="fab fa-facebook social fa-2x icon1"></i></a>
       <a href="https://www.instagram.com/themeehirmhatre/"><i class="fab fa-instagram social fa-2x icon1"></i></a>
       <a href="https://twitter.com/BillGates?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab icon1 fa-twitter social fa-2x"></i></a>
       <a href="mailto:meehirmhatre1234@gmail.com"><i class="fas fa-envelope social fa-2x"></i></a>
     </div>
     <p class="write">© Copyright 2018 Future In Sight.</p>

  </footer>








  <script src="app.js" charset="utf-8"></script>
</body>

</html>
