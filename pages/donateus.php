<?php 
   session_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OneDrop | Donate Us</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../styles/donate us.css">
<link href="../styles/main.css" rel="stylesheet" type="text/css">
<style>
  #dm{
    background-color: #9a9b9c;
  }

  #dm a{
    color: white;
  }
</style>
</head>
<body>
<?php include '../server/donate_val.php';?>
<?php include 'header.php';?>
<section id="main3">
<h2>DONATE US!!!</h2>
<div class="row">
  <div class="col-75">
    <div class="container3">
      <form method="post" action=""> 
      
        <div class="row">
          <div class="col-50">
            <h3>Personal details</h3>
            <p><span class="error">* required field</span></p>
            <!--fullname-->
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John M. Doe" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span><br><br>
            <!--email-->
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" value="<?php echo $email;?>">
              <span class="error">* <?php echo $emailErr;?></span><br><br>
            <!--address-->
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"value="<?php echo $add;?>">
            <!--city-->
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York"value="<?php echo $city;?>">
            <!--contact number-->
            <label for="tel"><i class="fa fa-mobile-phone" style="font-size:20px"></i> Telephone</label>
            <input type="text" id="tel" name="tel" placeholder="011-5555555" value="<?php echo $tel;?>">
             <span class="error">* <?php echo $phoneErr;?></span><br><br>
          </div>  
         

          <div class="col-50">
            <h3>Payment</h3>
            <!--card type-->
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <!--name on card-->
            <label for="cname" >Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe" value="<?php echo $cname;?>">
            <span class="error">* <?php echo $cnameErr;?></span><br><br>

            <!--Amount-->
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" value="<?php echo $amount;?>">
            <span class="error">* <?php echo $amountErr;?></span><br><br>


            <div class="row" style="padding: 0";>
              <div class="col-50" >
            <!--credit card number-->
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cno" placeholder="1111-2222-3333-4444" value="<?php echo $cno;?>">
              <span class="error">* <?php echo $cnoErr;?></span><br><br>
              </div>
              <!--credit card cvv-->
              <div class="col-50" >
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"value="<?php echo $cvv;?>">
                <span class="error">* <?php echo $cvvErr;?></span><br><br>
              </div>
            </div>
             
           <div class="row" style="padding: 0";>
            <!--credit card expirymonth-->
            <div class="col-50" >
              <label for="expyear">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September" value="<?php echo $expmonth;?>">
              <span class="error">* <?php echo $exmonthErr;?></span><br><br>
            </div>

            <!--credit card expiryyear-->
            <div class="col-50" >
              <label for="expyear">Exp Year</label>
              <input type="text" id="expyear" name="expyear" placeholder="2018" value="<?php echo $expyear;?>">
                <span class="error">* <?php echo $exyearErr;?></span><br><br>
            </div>

          </div>
        
          </div>
          
          </div>

        <input type="submit" name="save" value="Continue to proceed" class="btn">
      </form>
    </div>
  </div>
</div>
</section>
<?php include 'footer.php';?>
</body>
</html>
