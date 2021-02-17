<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
<?php
  //sql statement for selectin all users from users table
  $sql = "SELECT * FROM users";
  //making connection
  include('connection.php');
  //querying the data
  $qry = mysqli_query($conn, $sql);
//dumping info into variable
  //var_dump($qry);
  //counting the number of records
  $count = mysqli_num_rows($qry);
  if($count>=1)
  {

    echo "<h3> Found ". $count . " Record.  ";
      echo "<table border=1>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>USERNAMEW</th>";
      echo "<th>PASSWORD</th>";
      echo "<th>EAMIL</th>";
      echo "<th>ROLE</th>";
      echo "<th>STATUS</th>";
      echo "</tr>";
      //Getting all data by using while loop
      while($row=mysqli_fetch_array($qry))
      {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['username']."</td>";
          echo "<td>".$row['password']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['role']."</td>";
          echo "<td>".$row['status']."</td>";
          echo "</tr>";
      }

      echo "</table>";
  }
  else{
      echo "<h1>No Records Found</h1>";
  }

?>
    
</body>
</html>