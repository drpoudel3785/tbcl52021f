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

//The array types
/* 
  1. INdex array
  2. Associative Array
  3. Multidimensional arry
  */
  //To define the array
  $names = array("Ram", "Shyam", "Hari");

  $names[]="Manita";
  $names['1']="Sita";

  foreach($names as $n)
  {
	  echo "The name is: ". $n ."<br/>";
  }


  //multidimensional Array
  //multidimensional Array
   // Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",   "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",   "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",   "email" => "harrypotter@mail.com",
    ),
    array(
        "name" => "Dharma Raj Poudel",   "email" => "DPAUDEL@thebritishcollege.edu.np",
    )
);
// Access nested value
echo "Dharma Raj POudels Email-id is: " . $contacts[3]["email"];
echo "<hr/>";

//Printing all the datas at once by using loop
foreach($contacts as  $key=>$value){
	echo $key. " Record <br/>";
	foreach($value as $k=>$v)
	{
		echo ucfirst($k) . " is " .strtolower($v). "<br/>";
	}
	echo "<hr/>";
}


$con = array(
	"ram"=>array("college"=>"TBC", "height"=>"5.7"),
	"shyam"=>array("college"=>"TBC", "height"=>"5.7")
);

//string functions
/*
strlen() //the length of the string
str_word_count() //Counting number of words in string
strrev() //Reverse of the string
md5() //md5 encryption
sha1() //sha1 encryption
ucfirst() // Upper case for first letter
ucwords() // Initial letter capatilize for every words
strtolower() // Lowercase for  strings
strtoupper() // Uppercase for string
trim() // space remove from first and last of the string
*/

$name = "     Ram Bahadur Shrestha         ";
echo trim($name) ."<br>";

$password = "Ram@123";
echo $password . "<br/>";
echo md5($password). "<br/>";
echo sha1($password). "<br/>";

echo strlen(md5($password)). "<br/>";
echo strlen(sha1($password)). "<br/>";

if(md5($password)==md5("Ram@123")){
	echo "Password Match";
}
else{
	echo "Password Not Match";
}

?>