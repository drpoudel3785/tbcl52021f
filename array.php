<?php
$fruits =  array("orange" , "banana", "grapes" , "apples" );
print_r($fruits);
echo "<br/>";

echo $fruits['2'];


echo "<br/>";
// printing the array values
for($i=0; $i<count($fruits); $i++)
{
	echo $fruits[$i] . "<br>";
}

echo serialize($fruits);
















?>