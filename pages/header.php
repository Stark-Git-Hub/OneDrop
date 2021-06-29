<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
//session_start();

	include("../server/connectdb.php");
	//include("../server/functions.php");

	//$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/main.css" rel="stylesheet" type="text/css">
    <link href="../styles/dropdown.css" rel="stylesheet" type="text/css">
    <script src="../scripts/dropdown.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="Top">
        <div id="Name"></div>
        <div id="blank"></div>
        
        <div id="log" class="acc" style="text-align:center;font-size:21px;color:white">

        <?php
        if(isset($_SESSION['Email'])){
            echo "Welcome ".$_SESSION['user']."!";
            
        }
        else{
            echo"";
        }
        ?>
        </div>

        <div class="dropdown" >
            <button onclick="dropdown()" class="drop" style="font-size:21px;">Account</button>
            <div id="topics" class="dropdown_content">
            <?php
        if(isset($_SESSION['Email'])){
            echo"<a href='signout.php'>Sign out</a>";
            //echo $user_data['Full_name'];
        }
        else{
            echo"<a href='signup.php'>Register</a>";
            echo " <a href='sign.php'>Sign In</a>";
        }
        ?>
                
               
        </div>
        </div> 

    <div id="home" class="page" style="grid-column: 2/3;"><a href='home.php'>Home</a></div>
    <div id="en" class="page" style="grid-column: 3/4;"><a href="search.php">Search</a></div>
    <div id="cm" class="page" style="grid-column: 4/5;"><a href="#footer">About Us</a></div>
    <div id="dm" class="page" style="grid-column: 5/6;"><a href="donateus.php">Donate Us</a></div>
   
    </div>

</body>
</html>