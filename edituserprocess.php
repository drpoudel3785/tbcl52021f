<?php
require_once('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER PROCESS</title>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
  $id= $_POST['id'];
  $username = $_POST['username'];
  $password=md5($_POST['password']);
  $email = $_POST['email'];
  $role = $_POST['role'];
  $status = $_POST['status'];

  if(!empty($password))
  {
      $sql = "UPDATE users SET
      username = '$username',
      password = '$password',
      email = '$email',
      status = '$status',
      role = '$role'
      WHERE id=$id
      ";

  }
  else{
    $sql = "UPDATE users SET
    username = '$username',
    email = '$email',
    status = '$status',
    role = '$role'
    WHERE id=$id
    ";
  }

  include('connection.php');
  $qry= mysqli_query($conn, $sql)or die(mysqli_erro($conn));
  if($qry)
  {
    header("Location: getallusers.php?msg=$username Updated Successfully.");
  }
  else
  {
      echo "There is Problem while updating the $username";
  }

}
else
{
    header('Location: getallusers.php');
}
?> 
</body>
</html>