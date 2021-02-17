
<?php
if(isset($_POST['submit']))
{
    //collecting a data from from
    $name = trim($_POST['uname']);
    $pass = md5(trim($_POST['upass']));
    $email = trim($_POST['uemail']);
    if(!empty($name) &&  !empty($pass) && !empty($email))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
    $role = 2;
    $status = 1;
// Preparing the SQl Statement
   $sql = "INSERT INTO users(username, password, email, role, status) VALUES('$name', '$pass', '$email', $role, $status)";
//Connect to the database
include('connection.php');
// query
$qry =  mysqli_query($conn, $sql);
if($qry)
{
    echo "Data Inserted Successfully";
}
else{
    echo "Something wrong while inserting data";
}
mysqli_close($conn);
        }
        else{
            echo "Email must be in Email format";
        }
    }
    else{
        echo "Pls fill all the fields";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST" name="registerFrm" action="<?php $_SERVER['PHP_SELF'];?>">

       <fieldset>
       <legend>Register</legend>
       <input type="text" name="uname" placeholder="Username"/><br/>
       <input type="password" name= "upass" placeholder="Password"/><br/>
       <input type="text" name="uemail" placeholder="you@example.com"/><br/>
       <input type="submit" name="submit" value="Register"/>
    </form>
    
</body>
</html>

<?php

?>