<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Old-age Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/old-age.css">

  <script src="https://kit.fontawesome.com/7272020985.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


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

                              <li class="nav-item font-weight-bold ml-5"><a class="nav-link ">
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

          <p class="top-p">Eldercare</p>
          <a type="button" href="payment.php" class="btn btn-danger btn-lg top-btn">Donate</a>
          <p class="top-p2">A generous help from you can go a long way in bringing cheer and joy to the lives of elder.</p>


        </div>
      </div>
    </div>

  </header>

  <content>
      <div class="container edu">
        <div class="row">
          <div class="col-lg-6 ">
            <div class="vl">
              <h2 style="margin-left:10px;">Old age homes as a <br />fact of life</h2>
            </div>

            <p>The high number of old age homes is emerging mostly due to the fact that children are not ready to keep their parents with themselves. With the rise in age the elderly turn out to be a liability for them and as a burden.</p>
            <h5>'Your parents, Our responsibility'</h5>
            <p>Old Age Homes meet the diverse needs of elderly especially their everyday needs of food, clothing, medical services and lodging . It provides a
            homely environment to the elderly and also caters to their needs with utmost love and affection</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in.</p>
          </div>
          <div class="col-lg-6">

            <img class="class-img" src="images/old-age2.jpeg" alt="">

          </div>
        </div>
      </div>



    <h4 class="line container">Support an old age home to make sure that in their old age, <br>these senior citizens are taken care of.  </h4>
 <hr  style="height:1.3px;border-width:0;background-color:#f97068 ; width:30%">



    <!-- 1st row of cards -->

    <div class="container">





        <div class="row">

          <div class="col-lg-4 ">

            <div class="card shadow  rounded" style="width:350px;">
              <img class="card-img-top cards-img image" src="images/oldcard-1.jpeg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Old Age Home</h5>
                <p class="card-text">A roof over their heads is a critical need of the elder who are destitute, sick and abandoned by family and those uprooted by disasters. </p>

              </div>
            </div>

          </div>


          <div class="col-lg-4">

            <div class="card shadow rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/oldcard-2.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Abandoned grandparent</h5>
                <p class="card-text">Many a times, under the guise, many conveniently abandon their ailing parents to suffer on footpaths, with no money even to buy a meal.</p>

              </div>
            </div>

          </div>

          <div class="col-lg-4 ">

            <div class="card shadow  rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/oldcard-3.jpeg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Adopt a grand parent</h5>
                <p class="card-text">Adopt a grandparent by providing them monthly groceries.Every monthly donation helps in feeding elderly citizens.</p>

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
              <img class="card-img-top cards-img image" src="images/oldcard-4.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Akshaya Trust (chennai)</h5>
                <p class="card-text">Akshaya Trust started an old age home to protect the destitute senior citizens in Mudichur, Chennai. They look after senior citizens who are neglected by their own families. Currently, they are supporting 55 senior citizens.
         They are provided with good shelter, clothing, food and medical facility, with love and affection.</p>

              </div>
            </div>

          </div>


          <div class="col-lg-4">

            <div class="card shadow  rounded" style="width:350px ">
              <img class="card-img-top cards-img image" src="images/oldcard-5.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Shraddhanand Mahilashram(Maharashtra)</h5>
                <p class="card-text">Shraddhanand Mahilashram provides shelter to women above 60 years of age.Their aim is to provide peace to these women in their last days. Apart from basic facilities including food and a separate bed,
         organization also has an active medical staff to take care of the elderly.</p>

              </div>
            </div>

          </div>

          <div class="col-lg-4">

            <div class="card shadow rounded" style="width:350px ">

              <img class="card-img-top cards-img image" src="images/oldcard-6.jpg" alt="Card image">
              <div class="middle">
                <a href="payment.php" class="btn btn-danger stretched-link card-btn">Donate Now</a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Abhinav Samaj (Delhi)</h5>
                <p class="card-text">Abhinav Samaj runs Jai Ma Durga old age home in Delhi, providing free shelter, food and medical care to elderly parents. Last year they admitted 94 senior citizens in their free old age home, mostly shun away by their children. They believe that senior citizens are the pillar of
        society and a society can never develop if it does not respect its parents and elderly</p>

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
            <p>  It's been the cleanest place, well-equipped building and facilities here are compatible. Its a great feeling to stay here and atmosphere around is highly eco-friendly maintained by staff of old age home.</p>
            <em>Jhanhvi, Kolhapur</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>I am extremely satisfied with the hospitality care shown by Murali's home for elders. It is highly hygienic, maintenance is regular and food is very well balanced as per the diet. All the staff are
              very cooperative.
            </p>
            <em>Shalini, Thane</em>
          </div>

          <div class="carousel-item">
            <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
            <p>Everything at Old Age Home is great but one thing I admire is nutritional food that is provided is very hygienic, and more on-time taken care by dedicated staff who are one step ahead in making senior people more comfort.
            </p>
            <em>Niharika, Assam</em>
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
