<?php
$nameErr = $emailErr = $phoneErr = $cnameErr = $cnoErr =$exmonthErr=$exyearErr= $cvvErr=$amountErr= "";
$name = $email =$tel=$city = $cname = $cno =$expmonth=$expyear= $cvv=$add=$amount="";

$form_valid = TRUE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //fullname
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $form_valid = FALSE;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $form_valid = FALSE;
    }
  }
//email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $form_valid = FALSE;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $form_valid = FALSE;
    }
  }

//telephone number
  $tel=$_POST["tel"];
  if (empty($tel)) { //array
    $phoneErr = "phone no is required";
    $form_valid = FALSE;
  } else if(!preg_match("/^[0-9]{10}+$/",$tel)){
     $phoneErr="invalid format";//10digits
     $form_valid = FALSE;
  }else {
    $tel = test_input($_POST["tel"]); //not required
  }
//name on card
  if (empty($_POST["cname"])) {
    $cnameErr = "Name on credit card is required";
    $form_valid = FALSE;
  } else {
    $cname = test_input($_POST["cname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$cname)) {
      $cnameErr = "Only letters and white space allowed";
      $form_valid = FALSE;
    }
  }
//card number
  if (empty($_POST["cno"])) {
    $cnoErr = "credit card no is required";
    $form_valid = FALSE;
  } else {
    $cno = test_input($_POST["cno"]);
    // check if name only contains letters and whitespace
    if(preg_match('/^[0-9]{10}+$/',$cno)) {
      $cnoErr = "Only nos are allowed";
      $form_valid = FALSE;
    }
  }
//card expiry date
  if (empty($_POST["expmonth"])) {
    $exmonthErr = "expired month is required";
    $form_valid = FALSE;
  } else {
    $expmonth = test_input($_POST["expmonth"]);
    // check if name only contains letters and whitespace
   if(preg_match('/^[0-9]{10}+$/',$expmonth)) {
      $exmonthErr = "Only nos are allowed";
      $form_valid = FALSE;
    }
  }
//expiry year
  if (empty($_POST["expyear"])) {
    $exyearErr = "Name is required";
    $form_valid = FALSE;
  } else {
    $expyear = test_input($_POST["expyear"]);
    // check if name only contains letters and whitespace
   if(preg_match('/^[0-9]{10}+$/',$expyear)) {
      $exyearErr = "Only no's are allowed";
      $form_valid = FALSE;
    }
  }
//card cvv
  if (empty($_POST["cvv"])) {
    $cvvErr = "cvv is required";
    $form_valid = FALSE;
  } else {
    $cvv = test_input($_POST["cvv"]);
    // check if name only contains letters and whitespace
    if(preg_match('/^[0-9]{10}+$/',$cvv)) {
      $cvvErr = "Only nos are allowed";
      $form_valid = FALSE;
    }
  }
//amount
if (empty($_POST["amount"])) {
  $amountErr = "Amount is required";
  $form_valid = FALSE;
} else {
  $amount = test_input($_POST["amount"]);
  // check if name only contains letters and whitespace
  if(preg_match('/^[0-9]{10}+$/',$amount)) {
    $amountErr = "Only nos are allowed";
    $form_valid = FALSE;
  }
}
//address
  if (empty($_POST["add"])) {
    $add = "";
  } else {
    $add = test_input($_POST["add"]);   
  }
//city
  if (empty($_POST["city"])) {
    $city = "";
  } else {
    $city = test_input($_POST["city"]);
    }
}
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($form_valid){
  if(isset($_POST['save'])){
    include 'donate_entry.php';
  }
}
?>