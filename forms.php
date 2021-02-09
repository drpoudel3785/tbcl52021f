 <?php
   //Capture the Data from the Form
   //  $_GET   $_POST   $_REQUEST

   // isset()       empty()
   if(isset($_POST['submit']))  
   {
     $user = $_POST['username'] ;
     $pass = $_POST['password'];
     if(!empty($user) && !empty($pass))
     { 
         echo "The Username is " .$user. "The Password is " .$pass;
     }
      
     else
     {
         echo "Plese fill the username and password";
     }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

   <form name="Login" action="" method="POST" enctype="multipart/form-data">
     <input type="text" name="username" placeholder="Username"/>
     <input type="password" name="password" placeholder= "Password"/>
     <input type="submit" name="submit" value="Login"/>
   </form>
    
</body>
</html>