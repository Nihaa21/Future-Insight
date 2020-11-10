<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Education</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/education.css">

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
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i
                class="fa fa-bars bars"></i></button>

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

          <p class="top-p">Sponser a child's education.</p>
          <a type="button" class="btn btn-danger btn-lg top-btn" href="payment.php">Send a child to school</a>
          <p class="top-p2">The donated amount will help to pay the school fees of a child.</p>


        </div>
      </div>
    </div>

  </header>

  <content>
    <div class="container edu">
      <div class="row">
        <div class="col-lg-6 ">
          <div class="vl">
            <h2 style="margin-left:10px;">Poverty in <br>India</h2>
          </div>

          <p>One third of India’s people live in extreme poverty, going hungry for days at a time, getting sick from preventable diseases, and struggling to find clean water. With so many challenges,
            millions of children in India cannot attend school long enough to graduate.</p>
          <h5>How can we stop the cycle? </h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris.</p>
          <p>Sponsoring a child is the key to breaking the cycle of poverty. When you sponsor a child in India, you give access to life-changing essentials like clean water,
            improved nutrition, healthcare, education, and economic opportunity for their parents.<br>Child sponsorship means that kids are healthy and stay in school. Parents can protect and provide for them. The generational chains of poverty are
            broken!</p>
        </div>
        <div class="col-lg-6">

          <img class="class-img" src="images/class1.jpg" alt="">

        </div>
      </div>
    </div>



    <h4 class="line">Sponsering is the joy of helping a child break free from poverty to create a life of health, safety, and a bright future! </h4>

    <hr style="height:1.3px;border-width:0;background-color:#f97068 ; width:30%">


    <!-- 1st row of cards -->

    <div class="container">





      <div class="row">

        <div class="col-lg-4 ">

          <div class="card shadow  rounded" style="width:350px;">
            <img class="card-img-top cards-img image" src="images/primary.jpg" alt="Card image">
            <div class="middle">
              <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Protect and care for children</h5>
              <p class="card-text">Help parents and caregivers start small businesses and provide for their families.Get kids involved in clubs, where they can cultivate leadership and develop character</p>

            </div>
          </div>

        </div>


        <div class="col-lg-4">

          <div class="card shadow rounded" style="width:350px ">
            <img class="card-img-top cards-img image" src="images/client1.jpg" alt="Card image">
            <div class="middle">
              <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Sponser secondary education for a child.</h5>
              <p class="card-text">Although post-secondary education is much more expensive than school education, the sponsorship periods at this level will generally be shorter than for school-age children, so the overall long-term cost to a
                sponsor should still be affordable</p>

            </div>
          </div>

        </div>

        <div class="col-lg-4 ">

          <div class="card shadow  rounded" style="width:350px ">
            <img class="card-img-top cards-img image" src="images/college.jpg" alt="Card image">
            <div class="middle">
              <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Sponser college education to an unprivileged child.</h5>
              <p class="card-text">Sponsorship is a way of providing basic needs and education for an underprivileged child.
                You may directly sponsor a boarding or day student, which means paying set fees on an annual basis.</p>

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
              <img class="card-img-top cards-img image" src="images/stationary.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Help a child by sponsering School stationary.</h5>
                <p class="card-text">Under this program donor can adopt a public school in remote villages in India to provide basic facilities like drinking water, lab equipment, teachingmaterial, additional teachers, rest rooms, books for students
                </p>

              </div>
            </div>

          </div>


          <div class="col-lg-4">

            <div class="card shadow  rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/meals.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Feed nutritious meals to a poor school child.</h5>
                <p class="card-text">Food insecurity affects about nine percent of the global population, with hundreds of millions of children experiencing hunger as a result.Requesting your support to feed wholesome meals to vulnerable sections of
                  the society.</p>

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
                <h5 class="card-title">Sponser education to a rural girl child.</h5>
                <p class="card-text">This micro project provides quality education to the poor girl child age group 12 to 16yrs studying VI to X Std, as Education is a basic human right, vital to personal & societal development and well-being. </p>

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
            <img class=" testimonial-imgs " src="press-imgs/niha.png" alt="">
            <p> "My association with Future in sight as a sponsor will be lifelong. This is the best fact that the school and teachers of Deepalaya work selflessly and tirelessly in giving opportunities to all those children who are deprived of
              quality education"</p>
            <em>Deepak, Goa</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>"Since 2002, it has been a wonderful journey for us to be associated with Future in sight. It is a rewarding and wholesome experience that brings a richness to your life, just knowing the good things you are able to help these children
              achieve"
            </p>
            <em>Neha, Haryana</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>"I got associated with Future in sight in the year 2000 though the recommendation of a friend. It gives immense pleasure to our sponsored child completing her school and getting admitted in a college"
            </p>
            <em>Pravin,Mumbai</em>
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
    <img src="images/logo.png" class="logo-bottom" alt="">
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
