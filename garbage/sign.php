<?php 

session_start();

	include("connection1003.php");
	include("functions1003.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['psw1'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where Full_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['psw1'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: search.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>OneDrop | Sign In</title>
  <script src="../scripts/pwvisible.js"></script>
  <link href="sign.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include 'header.php';?>
<div id="main4">
<div class="container2">
    <div class="box2">
      <h1>Sign In</h1>
      <form action="" method="post">
        <label for="uname"></label>
        <i class="fa fa-user icon"></i>
        <input type="text" placeholder="Enter Email" name="user_name" required>
        <label for="psw"><b></b></label>
        <i class="fa fa-eye-slash" id="logo" onclick="showhide();myFunction()"></i>
        <input type="password" placeholder="Enter Password" name="psw1" required>
        <label>
        
        </label>
        <br><br><span class="psw"><b>Don't have an account?</b> <a href="signup.php">Create new account</a></span>
        <br><button type="submit" class="button button1">Login</button>
        <button type="button" class="button button2"><a href="home.php">Cancel</a></button>
      </form>
    </div>
</div>
</div>
<?php include 'footer.php';?>
</body>

</html>