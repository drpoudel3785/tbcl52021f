<?php
$num = 10325;
echo filter_var($num, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);

$str = "           it'sapassword<h1>THis</h1>          ";
echo "<pre>";
echo trim(filter_var($str, FILTER_SANITIZE_STRING));
echo "</pre>";

$story = "This is a web applications and technology class. we are studying web techonology.";

$pattern = "/[a-z]/";


?>