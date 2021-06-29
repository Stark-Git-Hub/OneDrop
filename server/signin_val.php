<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include "connectdb.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$email = $_POST['Email'];
$pwd = $_POST['psw1'];
$sql = "select * from users where  Email='$email' and psw1='$pwd' ";
 $result = $conn->query($sql);

if($result->num_rows>0){
$_SESSION["Email"]=$email;
header("location:../pages/search.php");

 while($row=mysqli_fetch_array($result))
               { $username = $row['Full_name'];
                $_SESSION['user']= $username;

               }
       
                
}
else{
header("location:../pages/sign.php?error=*Incorrect E-mail or password");
exit();
}
}

?>