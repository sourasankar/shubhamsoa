<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,
               initial-scale=1.0"/>
    <link rel="stylesheet" href="css/stylepay.css" 
          class="css" />
  </head>
  <body>
    <div class="container">
	<br><br>
      <div class="main-content">
        <p class="text">Gwalior Travel Management System</p>
      </div>
  <br><br>
      <div class="centre-content">
        <h1 class="price"> Rs <?php echo $_SESSION["total_pkg_price"]; ?><span>/-</span></h1>
        <p class="course">
          
        </p>
      </div>
  
      <div class="last-content">
        <button type="button" class="pay-now-btn">
           Apply Coupons
        </button>
        <button type="button" class="pay-now-btn">
           Pay with Netbanking
        </button>
  
        <!-- <button type="button" class="pay-now-btn">
        Netbanking options
        </button> -->
      </div>
  
      <div class="card-details">
        <p>Pay using Credit or Debit card</p>
  
        <div class="card-number">
          <label> Card Number </label>
          <input
            type="text"
            class="card-number-field"
            placeholder="###-###-###"/>
        </div>
        <br />
        <div class="date-number">
          <label> Expiry Date </label>
          <input type="text" class="date-number-field" 
                 placeholder="DD-MM-YY" />
        </div>
  
        <div class="cvv-number">
          <label> CVV number </label>
          <input type="text" class="cvv-number-field" 
                 placeholder="xxx" />
        </div>
        <div class="nameholder-number">
          <label> Card Holder name </label>
          <input
            type="text"
            class="card-name-field"
            placeholder="Enter your Name"/>
        </div>
        <button type="submit" 
                class="submit-now-btn">
          submit
        </button>
      </div>
    </div>
  </body>
</html>