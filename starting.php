<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Hello world";
//variable declaration
$message= "Hello, Good Morning";
echo "<br/>";
echo "<p>$message</p>";

//variable declaration
$a=10;
$b=10.20;
$res=TRUE;
$sum=$a+$b;


$qty=5;
$price=10000;
$amt=$qty*$price;
echo "Rs ". number_format($amt, 2);

echo "<br/>";
//gettype returns the types of data
echo gettype($a);
echo  "<br/>";
echo gettype($b);
echo  "<br/>";
echo gettype($res);
echo  "<br/>";

echo "The sum of $a and $b is $sum";
echo "<br/>";
echo 'The Sum of $a and $b is $sum';
echo "<br/>";
echo 'The Sum of '.$a . " and ". $b . " Is ". $a+$b;
?>
</body>
</html>
