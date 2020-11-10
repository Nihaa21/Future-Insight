<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future In sight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
     <link rel=" icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/7272020985.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


     <!-- signup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="main-top">
      <div class="fade-background">


        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container" style="margin-top:0;">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold"> <img class="logo" src="images/logo.png" alt="logo"> </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars bars"></i></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <div class="offcanvas-header mt-3">
     <button class="btn btn-outline-danger btn-close float-right"> &times Close </button> <br><br><br>
     <h5 class="py-2 brand">Future In Sight</h5>
   </div>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="main.php" class="nav-link  ">Home</a></li>
                <li class="nav-item"><a href="education.php" class="nav-link ">Education</a></li>
                <li class="nav-item"><a href="women.php" class="nav-link ">Women</a></li>
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
       <h1 >Small Effort <br> Make big change.</h1>
       <p>Future in Sight envisions a nation where all individuals and families achieve their human <br> potential through education, financial stability and healthy lives.  </p>
      <a href="#readmore">  <button type="button" class="btn btn-danger btn-lg top-btn">Read More</button></a>
     </div>
</div>

<div class="child">
  <div class=" child-text">
    <h4>We can’t help everyone,  but everyone can help someone !</h4>
    <p style="padding-top:5px;">Future In sight partners with the most credible nonprofits to make sure <br>
       your donation does what it is supposed to - change lives.<p>

  </div>
<a href="#programs"><button type="button" class="btn btn-danger btn-lg child-btn">Read More</button></a>
  </div>
</div>

<!-- <div class="custom-shape-divider-bottom-1599889151">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
 -->


<div class="container corona">
  <h3 class="corona-heading">Help <span>Future In Sight</span> support the vulnerable to combat COVID-19. </h3>
</div>

<!-- 1st row of cards -->

<div id="corona-cards">

    <div class="row">

      <div class="col-lg-4 ">

        <div class="card shadow rounded" style="width:350px;">
          <img class="card-img-top  image cards-image" src="images/corona1.jpeg" alt="Card image">

          <div class="card-body">
            <h6 class="card-title">provide PPE kits to frontline workers.</h6>
            <p class="card-text">These kits include N95 mask, 3 ply disposable masks, fluid shield mask with visor, surgical caps and hoods,
               surgical goggles, waterproof gown, shoe covers, and nitrile gloves.</p>
             <a href="payment.php">  <p>Donate now</p>   </a>
          </div>
        </div>

      </div>


      <div class="col-lg-4">

        <div class="card shadow rounded" style="width:350px ">
          <img class="card-img-top cards-image image" src="images/corona2.jpeg" alt="Card image">

          <div class="card-body">
            <h6 class="card-title">Help the migrant workers.</h6>
            <p class="card-text">We are raising funds to help migrants and daily wage workers with healthcare facilities, helplines, food and livelihood support and more.
            Also help them reach home by donating the travel expenses.</p>
                 <a href="payment.php">  <p>Donate now</p>   </a>
          </div>
        </div>

      </div>

      <div class="col-lg-4 ">

        <div class="card shadow  rounded" style="width:350px ">
          <img class="card-img-top cards-image image" src="images/corona5.jpg" alt="Card image">

          <div class="card-body">
            <h6 class="card-title">Distribution of dry rations for needy.</h6>
            <p class="card-text">Daily wage earners, small business owners are facing the brunt of the nationwide lockdown. We are supporting them and their families through the provision of ration and basic essentials.</p>
                         <a href="payment.php">  <p>Donate now</p>   </a>
          </div>
        </div>
      </div>

    </div>

</div>


<div id="about">

<div class="background">

    <h2 class="about-head">You can make a difference</h2>
<div class="row about-inner">


    <div class="donate col-lg-4">
        <i class="fas fa-donate fa-4x bigIcons"></i>
      <h5>Donate</h5>
        <p>Please come forward and contribute. Your contribution will transform lives.</p>
    </div>

    <div class="donate col-lg-4">
        <i class="fas fa-users fa-4x bigIcons"></i>
          <h5>Join Team</h5>
        <p>Join our team and help transform communities by working with Future In Sight.</p>
    </div>

    <div class="donate col-lg-4" >
          <i class="far fa-calendar-alt fa-4x bigIcons"></i>
          <h5>Give Monthly</h5>
        <p>Donate some amount to the needy every month and put a smile on their face.</p>
    </div>
</div>
</div>

</div>



<div class="container para" id="readmore">
  <div class="row" >
    <div class="col-lg-6 ">
      <div class="vl">

        <h3 style="margin-left:10px;">Donating definitely makes a difference to society</h3>
        <p style="margin-left:10px; color:#f97068;"> "Charity Wakes up realization."</p>
      </div>

      <p>One third of India’s people live in extreme poverty, going hungry for days at a time, getting sick from preventable diseases, and struggling to find clean water. With so many challenges,
        millions of children in India cannot attend school long enough to graduate.</p>
      <h5>How can we stop the cycle? </h5>
      <p>In such a scenario, the role of civil society organizations becomes all the more important. NGOs work on the ground and go right in the middle of the disadvantaged communities to improve their lives. Their work ranges from providing direct benefits to the needy to raising their voice at appropriate forums and ensuring that they (the needy) get their right to live a decent life.</p>
      <p>At the heart of our mission is the belief that we rise or fall together. We all have a stake in the betterment of our community and its members.<br> Our goal is to bring people together - NGOs, companies, individuals and government agencies - to work towards improving community conditions.</p>
    </div>
    <div class="col-lg-6">

      <img class="class-img" src="images/hands.png" alt="">

    </div>
  </div>
</div>




<!-- count-icons -->
<div class="container-fluid ">


<div class=" row info-count">


<div class="col-lg-3 counter-cols">
  <i class="fas fa-walking all-icons" style="color:#ff9800;"></i>
  <div class=" vl-count">
    <div class="counter">
      <h4 style="color:#ff9800;">20,400</h4>
      <h6>Volunteers</h6>
    </div>
  </div>
</div>

<div class="col-lg-3 counter-cols">
  <i class="fas fa-hand-holding-usd all-icons" style="color:#8bca4e;"></i>
  <div class=" vl-count">
    <div class="counter">
       <h4 style="color:#8bca4e;">21 Lacks</h4>
      <h6>Donated</h6>
    </div>
</div>
</div>

<div class="col-lg-3 counter-cols">
  <i class="far fa-smile all-icons" style="color:#ffc93c ;"></i>
  <div class=" vl-count">
    <div class="counter">
     <h4 style="color:#ffc93c ;">15,130</h4>
      <h6>Happy Children</h6>
    </div>
</div>
</div>

<div class="col-lg-3 counter-cols">
  <i class="fas fa-gift all-icons" style="color:#5586e8;"></i>
  <div class=" vl-count">
    <div class="counter">
      <h4 style="color:#5586e8;">82,435</h4>
      <h6>Products & Gifts</h6>
    </div>
</div>
</div>


</div>
</div>

<!-- all cards -->
<div class="container allcards" id="programs">
  <div class="container all">
    <h3 class="allcards-heading"> <span>Future In Sight</span> recommends programs which help people in extreme need or are in urgent need of funds . </h3>
  </div>
<hr  style="height:1.3px;border-width:0;background-color:#f97068 ; width:20%">

  <div class="row">

    <div class="col-lg-4 ">

      <div class="card shadow  rounded" style="width:350px;">
        <img class="card-img-top cards-img images" src="images/primary.jpg" alt="Card image">

        <div class="card-body">
          <h5 class="card-title">Education</h5>
          <p class="card-text">Sponsoring a child is the key to breaking the cycle of poverty. When you sponsor a child in India, you give access to life-changing essentials like clean water,
             improved nutrition, education.</p>
              <a href="education.html">  <p>Read More</p>   </a>
        </div>
      </div>

    </div>





    <div class="col-lg-4 ">

      <div class="card shadow  rounded" style="width:350px;">
        <img class="card-img-top cards-img images" src="images/womencard-1.jpg" alt="Card image">

        <div class="card-body">
          <h5 class="card-title">Women</h5>
          <p class="card-text">Thousands of women are in need of effective menstrual products. Together we can help make a difference in these women’s lives.
          Donate to help women fight against violence.</p>
           <a href="women.html">  <p>Read More</p>   </a>
        </div>
      </div>

    </div>



    <div class="col-lg-4 ">

      <div class="card shadow  rounded" style="width:350px ">
        <img class="card-img-top cards-img images" src="images/oldcard-3.jpeg" alt="Card image">

        <div class="card-body">
          <h5 class="card-title">Old-Age Home</h5>
          <p class="card-text">Adopt a grandparent by providing them monthly groceries.Every monthly donation helps in feeding elderly citizens.A roof over their heads is a critical need of the elder who are destitute.</p>
          <a href="old-age.html">  <p>Read More</p>   </a>
        </div>
      </div>
    </div>



</div>
</div>


<!--testimonials------------>


<section id="testimonials">
  <div  class="testimonials-cover carousel slide " data-ride="carousel" data-interval="1800">
    <div class="carousel-inner">
      <h2 style="padding-top:80px;">What people say?</h2>

      <div class="carousel-item active">
       <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
        <p> I am proud to be a volunteer for a life-changing organisation like CRY. Truly, charity changes not just the lives of the people on the receiving end, but also the lives of the people on the giving end.</p>
        <em>Simran Sokhi,Gujrat</em>
      </div>

      <div class="carousel-item">
        <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
        <p>Thank you so much for the work you do! I love your charity because it's efficient, dedicated, honest, and it's spiritually
           motivated but doesn't force one set of beliefs upon the recipients of your assistance.
        </p>
        <em>Nitish Khanna, Kolkata</em>
      </div>

      <div class="carousel-item">
        <img class="testimonial-imgs" src="press-imgs/niha.png" alt="">
        <p>Working with Future In Sight has been a very revealing and enriching experience. I realized that there are many small things that can be done to contribute to child rights.

        </p>
        <em>TR Ramachandaran, Andhra Pradesh</em>
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


<section id="press">
  <div class="container" >
    <div class="Associated">
      <h2> Associated with </h2>

    </div>
    <hr>

    <div class="row" >
      <div class="col-lg-3 col-6 ">
        <img class="press-logo" src="press-imgs/press2.png" alt="tnw-logo">
      </div>
      <div class="col-lg-3 col-6" >
        <img class="press-logo" src="press-imgs/press1.jpg" alt="tc-logo">
      </div>
      <div class="col-lg-3 col-6 " >
        <img class="press-logo" src="press-imgs/press4.jpg" alt="mashable-logo">
      </div>
      <div class="col-lg-3 col-6" >
        <img class="press-logo" src="press-imgs/press3.png" alt="biz-insider-logo">
      </div>
    </div>
  </div>
</section>


<footer>
   <img src="images/logo.png" class="logo-bottom"alt="">
   <h6 style="margin-top:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
   <div class="links">
     <a href=""><i class="fab fa-facebook social fa-2x icon1"></i></a>
     <a href=""><i class="fab fa-instagram social fa-2x icon1"></i></a>
     <a href=""><i class="fab icon1 fa-twitter social fa-2x"></i></a>
     <a href=""><i class="fas fa-envelope social fa-2x"></i></a>
   </div>
   <p class="write">© Copyright 2018 Future In Sight.</p>
</footer>
