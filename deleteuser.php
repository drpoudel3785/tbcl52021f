<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
<?php
if(isset($_GET['id']))
{
    $deleteid=$_GET['id'];
    $qry = "DELETE FROM users WHERE id = $deleteid ";
    include_once('connection.php');
    $result = mysqli_query($conn, $qry);
    if($result)
    {
       //Redirect to the all users
        header('Location: getallusers.php?msg=Data Deleted Successfully');
    }
    else
    {
        echo "Oops! there is problem while deleting the record". mysqli_error();
    }
}
else{
    header('Location: getallusers.php');
}
?>
    
</body>
</html>