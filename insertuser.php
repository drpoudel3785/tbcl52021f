<?php
// Preparing the SQl Statement
   $sql = "INSERT INTO users(username, password, email, role, status) VALUES('dharma', 'dharma', 'dpaudel@thebritishcollege.edu.np', 1, 1)";
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
?>