<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future In sight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/payment.css">
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
            <li class="nav-item"><a href="education.html" class="nav-link ">Education</a></li>
            <li class="nav-item"><a href="women.html" class="nav-link ">Women</a></li>
            <li class="nav-item"><a href="old-age.html" class="nav-link  ">Old-Age Home</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link ">Contact</a></li>


          <a href="index.php"><button type="button" class="btn btn-sm btn-danger logout-btn" data-toggle="modal" data-target="#signup">Logout

            </button></a>

          </ul>
        </div>
      </div>
    </nav>


    <div class="container info">

      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3">
          <i class="fas fa-shield-alt"></i>
          <p class="items">Secured Payment</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
         <i class="fas fa-handshake"></i>
          <p class="items">Trusted NGO's</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
        <i class="fas fa-chart-line"></i>
          <p class="items">Long Term impact</p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
        <i class="fas fa-clipboard-list"></i>
          <p class="items">Regular Reports</p>
        </div>

      </div>


<hr  class="mt-5" style="height:1.3px;border-width:0;background-color:#f97068 ; width:20%">


<div class="container ">





<div class="heading">
  <p> Fill info and Donate</p>
</div>

  <form action="checkout.php" method="post">
  <table >
    <tr class="row-table">
      <td>Full name:</td>
      <td><input type="text" name="name" class="textInput" value="" required></td>
    </tr>

   <tr>
   <td>Email:</td>
    <td>  <input type="email" name="email" class="textInput" value="" required></td>
   </tr>

   <tr>
   <td>Cause: </td>
  <td>
  <select id="cause" name="cause">
    <option value="education">Education</option>
    <option value="women">Women</option>
    <option value="Old-Age-Home">Old-Age-Home</option>
  </select>
  </td>
</tr>

<tr>
<td>Amount: </td>
<td>
<select id="amount" name="amount">
 <option value="200">200 </option>
 <option value="500">500 </option>
 <option value="1500">1500 </option>
 <option value="1500">2500 </option>
</select>
</td>
</tr>

<tr>
<td>Choose a Plan: </td>
<td>
<select id="plan" name="plan">
 <option value="Once">Once</option>
 <option value="Monthly">Monthly</option>
 <option value="Yearly">Yearly</option>
</select>
</td>
</tr>
</table>

<div class="pay-btn">
  <button type="submit" name="submit" style="color:white;">CHECKOUT</button>
</div>




</div>
</form>











  </body>
</html>
