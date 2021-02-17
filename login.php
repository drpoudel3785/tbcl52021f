<?php
  if(isset($_POST['submit']))
  {
     $user = $_POST['username'];
     $pass = $_POST['password'];
     if(!empty($user) && !empty($pass))
     {
     	$sql = "SELECT * FROM users WHERE username='$user' && password = '$pass' ";
     	include('connection.php');
     	$qry = mysqli_query($conn, $sql);
     	$count = mysqli_num_rows($qry);
     	if($count==1)
     	{
     		echo "Login SUccess";
     	}
     	else{
     		echo "Login Failed";
     	}
     }
     else
     {
     	echo "Pls fill all the fields";
     }
     mysqli_close($conn);
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="login" method="POST" action="">
    <input type="text" name="username" />
    <input type="password" name = "password"/>
    <input type="submit" name="submit" value="Login"/>

    </form>

    <hr/>
   <p>Don't Have a Account Clieck  <a href="register.php">Register</a></p>
</body>
</html>