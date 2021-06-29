<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>OneDrop | Sign In</title>
   <script src="../scripts/pwvisible.js"></script>
  <link href="../styles/sign.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include '../server/signin_val.php';?>
<?php include 'header.php';?>
<div id="main4">
<div class="container2">
    <div class="box2">
      <h1 style="margin:0">Sign In</h1>
      <form action="../server/signin_val.php" method="post">
         <?php if (isset($_GET['error'])){ ?>
        <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="uname"></label>
        <i class="fa fa-user icon"></i>
        <input type="text" placeholder="Enter Email" name="Email" required>
        <label for="psw"><b></b></label>
        <i class="fa fa-eye-slash" id="logo" onclick="showhide();myFunction()"></i>
        <input type="password" placeholder="Enter Password" id="myInput" name="psw1" required>
        
        <br><br><span class="psw"><b>Don't have an account?</b> <a href="signup.php">Create new account</a></span>
        <br><button type="submit" class="button button1">Login</button>
        <button name="submit" type="button" class="button button2"><a href="home.php">Cancel</a></button>
     
      </form>
    </div>
</div>
</div>
<?php include 'footer.php';?>
</body>

</html>