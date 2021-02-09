
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
   <form name="MultiplicationTable" action="" method="POST" enctype="multipart/form-data">
     <input type="text" name="num" placeholder="Enter Number"/>
     
     <input type="submit" name="submit" value="Get Table"/>
   </form>
   <?php
   if(isset($_POST['submit']))  
   {
     $num = $_POST['num'] ;
     if(filter_var($num, FILTER_VALIDATE_INT))
     {
     echo "<table width='200px' border='1'>";
       for($i=1;$i<=10;$i++)
       {
           echo "<tr><td>". $num. "</td><td> X </td><td>". $i . "</td><td> = </td> <td> ". $num*$i . "</td><tr>";
       }
     echo "</table>";
   }
    else
  echo "Pls enter the valid number";
 }

?>


    
</body>
</html>