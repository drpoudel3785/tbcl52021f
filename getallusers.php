<?php
//include
//include_once
//require
//require_once
require_once('sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All USers</title>
</head>
<body>

<p> Welcome,  <?php echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></p>

<hr/>

<a href="register.php">Add User</a>
<br/>

  <?php
    if(isset($_GET['msg']))
    {
        echo "<h4>".$_GET['msg']."</h4>";
    }
     $sql = "SELECT * FROM users";
    include('connection.php');
    $qry =  mysqli_query($conn, $sql);
   // var_dump($qry);
   $count = mysqli_num_rows($qry) or die(mysqli_erro($conn));
   echo "Thre are ".$count. " records.";
   if($count>=1)
   {
       echo "<table border=1>
          <tr>
          <th>ID</th>   <th>Username</th>    <th>password</th>  <th>Email</th>
          <th>Role</th>  <th>Status</th>  <th>Action</th>  </tr>   ";
         //printing all records form the the table
          //mysqli_fetch_array() or mysqli_fetch_assoc()
          while($row = mysqli_fetch_assoc($qry))
          {
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['username']."</td>";
              echo "<td>".$row['password']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['role']."</td>";
              echo "<td>".$row['status']."</td>";
              echo "<td>
              <a href=edituser.php?id=".$row['id'].">EDIT </a> |
              <a href=deleteuser.php?id=".$row['id'].">DELETE </a> 
              </td>";
              echo "</tr>";
          }
          echo "</table>";
   }
  ?>
</body>
</html>