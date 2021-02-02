<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Php Fundameltals</title>
</head>
<body> ";
?>
<h1>PHP fundamentals</h1>

<?php

  $name = "TBC";
  $Subject = "BCA";

  //Quick print variable
   print_r($name);
   echo $name;

   //@removes any notice and warning in browser
  echo @$subject;

  //destroying the variable by using unset() function
  unset($name);
  echo $name;

  $a=5;
  $b=3;

  $rem = $a % $b;

  echo $rem;

  $password = '123';
  $confirmpassword = 123;

  $match = $password === $confirmpassword;
  echo $match;

  //you can append the string by using .= operator
$a ="Good Morning ";
$a.= "All, The class is about to Web Applicatoins and Technology" ;
$a.= " We  are going to study about PHP and Mysql ";

echo $a;

//conditional statements
/*
  if
  if else
  if else if else
  if else if else if ... else
*/
$mobile = 9851163785;
$username ="Admin";
$password ="passw0rd";
if($username == "Admin" && $password == "password") {
    echo "Credential Match";
}
else {
    echo "Wrong Password or Username";
}
//write a program to findout the greatest among three numbers
//

?>
<?php
echo "
</body>
</html>";
?>