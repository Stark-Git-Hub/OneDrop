<?php

$name =  $_POST['name'];
$email = $_POST['email'];
$add =  $_POST['address'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$cname =  $_POST['cname'];
$cno = $_POST['cno'];
$expmonth =  $_POST['expmonth'];
$expyear = $_POST['expyear'];
$amount = $_POST['amount'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password) or die("Couldn't connect with server".mysqli_error($connection));
$db = mysqli_select_db($conn,"test") or die("Database connection fails");

$query="INSERT INTO money_donation (Amount, Full_name, Email, Address, City, Telephone, Name_on_card, Card_Number, Expiry_month, Expiry_year) VALUES('$amount','$name','$email','$add','$city','$tel','$cname','$cno','$expmonth','$expyear')";

if(mysqli_query($conn, $query)) {
    echo "<script> alert('Thank You for the concern !');
    window.location.href='../pages/home.php';</script>";
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>