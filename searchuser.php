<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Uses</title>
</head>
<body>
<form method="POST" name="search" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
  <fieldset>
    <legend>Search Users</legend> 
    <input type="text" name="searchUser" placeholder="Type User Name" value="<?php if(isset($_POST['searchUser'])) echo $_POST['searchUser']; ?>" />
    <input type="submit" name ="submit" value="Search..."/>
  </fieldset>
</form>
<?php
if(isset($_POST['submit']))
{

    //  sdklfjls\'
    $searchuser = addslashes(trim($_POST['searchUser']));
    if(!empty($searchuser)){
    $sql ="SELECT * FROM users WHERE username LIKE '%$searchuser%' OR email  LIKE '%$searchuser%' ORDER BY id DESC";
    include('connection.php');
    $qry = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    $count = mysqli_num_rows($qry);
    if($count>=1) {
        echo "Found $count Records <br/>";
        echo "<table border =1 ><tr>
        <td>USername</td><td>Email</td><td>Role</td><td>Status</td></tr>";
        foreach($qry as $row)
        {
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "Sorry $searchuser Not Found in our DB";
    }
}
else{
    echo "Pls write in Search Box";
}
}
?>   
</body>
</html>