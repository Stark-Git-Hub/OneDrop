<?php

$DateofBirth = $_POST['dateofbirth'];
$psw1 = $_POST['psw1'];
$psw2 = $_POST['psw2'];
$is_doctor = $_POST['is_doctor'];
$is_donor = $_POST['is_donor'];
$bloodgroup = $_POST['bloodgroup'];
$gender =  $_POST['gender'];
$title_ =  $_POST['title_'];
$name =  $_POST['name'];
$lname =  $_POST['lname'];
$email = $_POST['email'];
$add =  $_POST['address'];
$tadd = $_POST['t_address'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$tel2 = $_POST['tel2'];
$nic = $_POST['nic'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password) or die("Couldn't connect with server".mysqli_error($connection));
$db = mysqli_select_db($conn,"test") or die("Database connection fails");

$query="INSERT INTO users (Dateofbirth, Blood_group, prefix, gender, Full_name, Last_name, Email, NIC, Address, t_address, District, Telephone, Telephone_2, is_donor, is_doctor, psw1, psw2) VALUES('$DateofBirth','$bloodgroup','$title_','$gender','$name','$lname','$email','$nic','$add','$tadd','$city','$tel', '$tel2','$is_donor','$is_doctor','$psw1','$psw2')";

if(mysqli_query($conn, $query)) {
    echo "<script> alert('Account has been created. Please sign in.');
    window.location.href='../pages/sign.php';</script>";
}
else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>