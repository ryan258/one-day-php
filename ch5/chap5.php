<?php
// simple strings
$msg = 'Hello';
$greeting = "Good Morning";
$emptyStr = "";
// concatinating strings
$areacode = "(208)";
$contact = '+1' . $areacode . '1234567';
echo $contact . "<br>";
//// COMMON STRING FUNCTIONS
// get the string's length
$str1 = 'Good Day!';
echo strlen($str1);
// string to upper or lower case
$str2 = 'Hello World';
$str3 = strtolower($str2);
$str4 = strtoupper($str2);
echo '<br>'.$str2;
echo '<br>'.$str3;
echo '<br>'.$str4;
echo '<br>';
// use trim() to remove surrounding white space
$str5 = ' is ';
echo 'PHP'.$str5.'Fun<br>';
echo 'PHP'.trim($str5).'Fun<br>';
// or a specific character
$str6 = '**Hello**World***';
echo trim($str6, '*');
echo '<br>';
// return the piece of a string with substring()
$str7 = 'ABCDEF';
echo substr($str7, 2).'<br>';
echo substr($str7, -3).'<br>';
echo substr($str7, 2, 1).'<br>';
// convert string to time - "now" , "tomorrow" , "next Monday" , "15 Nov 2019" or "+1 week"
echo strtotime("next Monday").'<br>';
// get a more meaningful format with the date() function
// make sure to set the timezone for your server
// date.timezone=America/New_York
// https://www.php.net/manual/en/function.date.php
echo date('d-M-Y', strtotime("+ 10 hours")).'<br>';
////ARRAYS
// create an array
$firstArr = array();
// create an indexed array
$secondArr = array(10, 20, 30, 40, 50);
// access a certain position of an array
echo $secondArr[3].'<br>';
// update a certain position of an array
$secondArr[3] = 4;
echo $secondArr[3].'<br>';
// create an associative array
$assocArr = array(
	'Peter' => 11,
	'Jane' => 16,
	'Paul' => 12
);
echo $assocArr['Paul'].'<br>';
// create an multidimensional array
$simpleMDArr = array(
  array(1, 2, 1, 4, 5),
	array(0, 5, 1, 3, 4),
	array(4, 1, 7, 8, 9) 
);
echo $simpleMDArr[2][3].'<br>';
// create an associative multidimensional array
$assocMDArr = array(
  "first array" => array(1, 2, 6, 1, 3),
	"second array" => array(3, 5, 1, 8, 9),
	"third array" => array(1, 0, 9, 4, 7)
);
echo $assocMDArr["first array"][2].'<br>';
// create an associative array of associative arrays
$anotherAssocMDArr = array(
	"first player" => array("name" => 'John', "age" => 25), 
	"second player" => array("name" => 'Tim', "age" => 35)
);
echo $anotherAssocMDArr["first player"]["name"].'<br>';
// display contents of an array
$myArray = array(2, 5.1, 'PHP', 105);
var_dump($myArray);
echo '<br>';
// display contents of an array w/o data types
print_r($myArray);
// add an element to an array
$addDemo = array(1, 5, 3, 9);
$addDemo[] = 7;
echo '<br>';
print_r($addDemo);
// add an element to an associative array
$addDemoAssoc = array('Peter'=>20, 'Jane'=>15);
$addDemoAssoc['James'] = 17;
echo '<br>';
print_r($addDemoAssoc);
// deleting items from an array, from a point to the end
$colors = array("red", "black", "pink", "white");
array_splice($colors, 2);
echo '<br>';
print_r($colors);
// deleting items from an array, from to point
$pets = array("corgi", "poodle", "golden retriever", "jack russell");
array_splice($pets, 1, 2);
echo '<br>';
print_r($pets);
//// COMMON ARRAY FUNCTIONS
echo '<br>';
// count the number of items in an array
$countDemo = array(1, 4, 5, 1, 2);
echo count($countDemo);
// search an array (returns the first matching index/key or false)
$indexArrDemo = array(11, 4, 5, 1, 2, 5, 6);
$assocArrDemo = array('A'=>12, 'B'=>5, 'C'=>20);
echo array_search(5, $indexArrDemo).'<BR>';
echo array_search(20, $assocArrDemo).'<BR>';
var_dump(array_search('B', $assocArrDemo));
echo '<br>';
// search an array (returns true or false)
var_dump(in_array(5, $indexArrDemo));
var_dump(in_array(20, $assocArrDemo));
var_dump(in_array('B', $assocArrDemo));
echo '<br>';
// merge indexed arrays into one
$num1 = array(100, 111, 120);
$num2 = array(100, 3, 5); 
$num3 = array(1, 10);
$newArray1 = array_merge($num1, $num2, $num3);
print_r($newArray1);
echo '<br>';
// if associative array keys are numbers they'll be converted into indexes
$names1 = array(5 => "Peter", 24 => "Aaron");
$names2 = array(5 => "Zac", 4 => "Alfred", 7 => "Avi");
$newArray2 = array_merge($names1, $names2);
print_r($newArray2);
// (0 => "Peter", 1 => "Aaron", 2 => "Zac", 3 => "Alfred", 4 => "Avi")
echo '<br>';
// merge associative arrays into one
$str1 = array('A'=> 12, 'B' => 5, 'C' => 8);
$str2 = array('A' => 15, 'D' => 10);
$newArray3 = array_merge($str1, $str2);
print_r($newArray3);
// ('A'=> 15, 'B' => 5, 'C' => 8, 'D' => 10)
echo '<br>';

echo '<br>';
echo '<br>';
