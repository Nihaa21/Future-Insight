<?php

session_start();


    $con = mysqli_connect('localhost','root');
    // if($con)
    // {
    //   echo"Connection successfull";
    //
    // }else{
    //   echo"No connection";
    // }


mysqli_select_db($con, 'futureinsight');

$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$cause = $_POST['cause'];
$plan = $_POST['plan'];
// $cardno = $_POST['cardno'];
// $namecard = $_POST['namecard'];
// $expirydate = $_POST['expirydate'];
// $cvv = $_POST['cvv'];

$query = "insert into donations(name, email, cause, amount, plan)
values('$name','$email','$cause','$amount', '$plan')";


mysqli_query($con, $query);
// header('location:payment.php');

// session_start();
if (isset($_POST['amount'])){
  $amount=$_POST['amount'];
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future In sight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/checkout.css">
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
<div class=" checkout">

<div class="border">

<h5 class="pb-4 text-center">Payment Details</h5>
    <form method="post" action="paytm/PaytmKit/pgRedirect.php">
      <table >
        <tbody>
          <!-- <tr>

            <th>Label</th>
            <th>Value</th>
          </tr> -->
          <tr>

            <td><label >ORDER_ID :*</label></td>
            <td><input  id="ORDER_ID" tabindex="1" maxlength="20" size="20"
              name="ORDER_ID" autocomplete="off"
              value="<?php echo  "ORDS" . rand(10000,99999999)?>">
            </td>
          </tr>
          <tr>

            <td><label>CUSTID :*</label></td>
            <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
          </tr>
          <tr>

            <td><label>INDUSTRY_TYPE_ID :*</label></td>
            <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
          </tr>
          <tr>

            <td><label>Channel :*</label></td>
            <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
              size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
            </td>
          </tr>
          <tr>

            <td><label>txnAmount :*</label></td>
            <td><input title="TXN_AMOUNT" tabindex="10"
              type="text" name="TXN_AMOUNT"
              value="<?php echo $amount; ?>">
            </td>
          </tr>
          <tr>

            <td></td>
            <td class="btn-checkout"><input class="btn btn-sm btn-danger" value="CheckOut" type="submit"	onclick=""></td>
          </tr>
        </tbody>
      </table>
      <!-- * - Mandatory Fields -->
    </form>
    </div>
</div>
  </body>
</html>
