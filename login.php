<?php
session_start();

//let's
//let\s
  if(isset($_POST['submit']))
  {
     $user = addslashes(trim($_POST['username']));
     $pass = addslashes(trim(md5($_POST['password'])));
     if(isset($_POST['remember']) && !empty($_POST['remember']))
     {
       setcookie("username", $user, time() + (60*60*24*7),"/");
       setcookie("password", $_POST['password'], time() + (60*60*24*7),"/");

     }

     if(!empty($user) && !empty($pass))
     {
     	$sql = "SELECT * FROM users WHERE username='$user' && password = '$pass' && status=1";
     	include('connection.php');
     	$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     	$count = mysqli_num_rows($qry);
     	if($count==1)
     	{
         session_unset();
        $ssid = session_regenerate_id();
        $_SESSION['username'] = $user;
        $_SESSION['sid'] = $ssid;

     		header("Location: getallusers.php");
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
    <input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" /> <br/>
    <input type="password" name = "password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"/> <br/>
    <input type="checkbox" name="remember" value="1"/>Remember Me <br/>
    <input type="submit" name="submit" value="Login"/>
    </form>

    <hr/>
   <p>Don't Have a Account Clieck  <a href="register.php">Register</a></p>
</body>
</html>