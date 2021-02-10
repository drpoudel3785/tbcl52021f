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
      $user1 =  trim(filter_var($user, FILTER_SANITIZE_STRING));
      if(filter_var($user, FILTER_VALIDATE_EMAIL))
     {
        
         echo "The Username is " .$user1. "The Password is " .$pass;
      }
       else{
        echo "Username must be in email format";
     }
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
     <input type="text" name="username" placeholder="example@domain.com" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>"/>
     <input type="password" name="password" placeholder= "Password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>"/>
     <input type="submit" name="submit" value="Login"/>
   </form>
    
</body>
</html>