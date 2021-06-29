<?php
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["psw1"]);
header("Location:sign.php?error=*You have signed out");
?>