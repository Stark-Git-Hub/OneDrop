<?php
$is_doctor =$errorP =$errorT =$is_donor  =$nameErr =$errorD =$errorR1=$errorR2= $lnameErr = $emailErr = $phoneErr = $phoneErr2 = $errorNIC=$errorTI =$psw1=$psw2= $errorGE =$errorB =$errorC="";
$name = $lname = $email =$tel=$tel2=$city =$dateofbirth = $add=$tadd=$nic=$title_=$gender=$bloodgroup =$errorCPSW=$errorPSW="";

$form_valid = TRUE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//prefix
  if (empty($_POST["title_"])) 
  {
    $errorTI = "required";
    $form_valid = FALSE;
  } 
  else 
  {
    $title_ = test_input($_POST["title_"]); //modify
  }
//firstname
  $name=$_POST["name"];
  if (empty($name)) {
    $nameErr = "required";
    $form_valid = FALSE;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $form_valid = FALSE;
    }
   else {
    $name = test_input($_POST["name"]);
  }
//date of birth
  if (empty($_POST["dateofbirth"])) {
    $errorD = "required";
    $form_valid = FALSE;
  } else {
    $DateofBirth = test_input($_POST["dateofbirth"]);
    //$form_valid = FALSE;
  }

//gender
  if (empty($_POST["gender"])) 
  {
    $errorGE = "required";
    $form_valid = FALSE;
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
    //$form_valid = FALSE; //code is omitted due to an error
  }
//bloodgroup
  if (empty($_POST["bloodgroup"])) 
  {
    $errorB = "required";
    $form_valid = FALSE;
  } 
  else 
  {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }

//lastname
$lname=$_POST["lname"];
  if (empty($lname)) {
    $lnameErr = "required";
    $form_valid = FALSE;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
      $form_valid = FALSE;
    }
   else {
    $lname = test_input($_POST["lname"]);
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

//password
  $psw1 =$_POST["psw1"];
  if (empty($psw1)) 
  {
    $errorPSW = "required";
    $form_valid = FALSE;
  } 
  else
  {   
     $uppercase = preg_match('@[A-Z]@', $psw1);
     $lowercase = preg_match('@[a-z]@', $psw1);
     $number    = preg_match('@[0-9]@', $psw1);
     $specialChars = preg_match('@[^\w]@', $psw1);

   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($psw1) < 8) 
   {
    $errorPSW="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    $form_valid = FALSE;
   }
   else
   {
    $psw1= test_input($psw1);
   }
  }
//confirming the password
 $psw2=$_POST["psw2"];
  if (empty($psw2)) 
  {
    $errorCPSW = "required";
    $form_valid = FALSE;
  } 
  else if($psw1!=$psw2)
  {
    $errorCPSW="not matched with password";
    $form_valid = FALSE;
  }
  else
  {
    $psw2 = test_input($_POST["psw2"]);
  }
//contactnumber1
/*  if (empty($_POST["tel"])) {
    $phoneErr = "phone no is required";
    $form_valid = FALSE;
  } else {
    $tel = test_input($_POST["tel"]);
    // check if name only contains letters and whitespace
    if(preg_match('/^[0-9]{10}+$/', $tel)) {
      $phoneErr = "Only numbers are allowed";
      $form_valid = FALSE;
    }
  }*/
  $tel=$_POST["tel"];
  if (empty($tel)) { //array
    $phoneErr = "required";
    $form_valid = FALSE;
  } else if(!preg_match("/^[0-9]{10}+$/",$tel)){
     $phoneErr="invalid format";//10digits
     $form_valid = FALSE;
  }else {
    $tel = test_input($_POST["tel"]); //not required
  }
//contactnumber 2
$tel2=$_POST["tel2"];
if (empty($tel2)) { //array
  $phoneErr2 = "required";
  $form_valid = FALSE;
} else if(!preg_match("/^[0-9]{10}+$/",$tel2)){
   $phoneErr2="invalid format";//10digits
   $form_valid = FALSE;
}else {
  $tel2 = test_input($_POST["tel2"]); //not required
}

//nic
  $nic=$_POST["nic"];
  if (empty($nic)) 
  {
    $errorNIC = "required";
    $form_valid = FALSE;
  } 
  else if(strlen($nic)!=10)
  {
    $errorNIC="invalid NIC";
    $form_valid = FALSE;
  }
  else {
    $nic = test_input($_POST["nic"]);
  }
//permanent address
  if (empty($_POST["address"])) {
    $errorP = "required";
    $add = "";
  } else {
    $add = test_input($_POST["address"]);   
  }
//temporary address
  if (empty($_POST["t_address"])) {
    $errorT = "required";
    $tadd = "";
  } else {
    $tadd = test_input($_POST["t_address"]);   
  }
//city
  if (empty($_POST["city"])) 
  {
    $errorC = "required";
    $form_valid = FALSE;
  } 
  else 
  {
    $city = test_input($_POST["city"]);
  }
}
//donor/doctor
if (empty($_POST["is_donor"])) {
  $is_donor  = "";
} else {
  $is_donor =  test_input($_POST["is_donor"]);
}
if (empty($_POST["is_doctor"])) {
  $is_doctor = "";
} else {
  $is_doctor  = test_input($_POST["is_doctor"]);
}-
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($form_valid){
  if(isset($_POST['save'])){
    include 'register_entry.php';
  }
}
?>