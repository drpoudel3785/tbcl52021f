<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD","");
    define("DB", "l52021f");
    //mysqli_connect()
    $conn = mysqli_connect(HOST, USER, PASSWORD, DB);
    if(!$conn)
    {
        echo "Database Connection Problem";
    }
?>