<?php
// basic if/elseif/else block
$a = 7;

if ($a < 0) {
  echo '$a is smaller than 0';
} elseif ($a < 10) {
  echo '$a is smaller than 10, hello elseif block!';
} else {
  echo '$a is  10 or larger, hello else block!';
}
echo '<br>';
// ternary operator - Condition ? task a if true : task b if false
$a = (7 == 7 ? 'Yes' : 'No');
echo $a.'<br>';
// switch statements
// switch (variable used for switching) {
// 	case firstCase:
//  	  Task A;
//  	  break;
// 	case secondCase:
// 	  Task B;
// 	  break;
// ...
// 	default:
// 	  Default task;
// }
$b = 20;

switch ($b) {
  case 10:
    echo 'It\'s 10!<br>';
    break;
  case 20:
    echo 'It\'s 20!<br>';
    break;
  case 25:
    echo 'It\'s 25... and 20!?!!<br>';
    break;
  default:
    echo 'It\'s not what we were expecting...!<br>';
}
// Do a for loop - for (initial value; test condition; modification to value) {}
for ($c = 1; $c < 5; ++$c){
	echo 'The value of $c is '.$c.'<br>';
}
// Use foreach to loop over arrays
// foreach ($array as $value) {}
$arr1 = array(11, 12, 13, 14, 15);
foreach ($arr1 as $num){
	echo 'The number is '.$num.'<br>';
}
// foreach ($array as $key=>$value) {}
$arr2 = array('Aaron'=>12, 'Ben'=>23, 'Carol'=>35);
foreach ($arr2 as $name=>$age){
	echo $name.' is '.$age.' years old.<br>';
}
// while loop - while (condition is true) { do something }
$d = 1;
while ($d < 5) {
  echo 'The value of $d is '. $d.'<br>';
  $d++;
}
// do-while loop, for when you want to at least do 1 loop no matter the condition - do { stuff } while (condition);
$e = 500;
do {
  echo 'The value is ' . $e;
  $e++;
} while ($e < 0);

//// False-y values
// 0 and 0.0
// ''
// "0"
// an empty array
// NULL 

// break; 
// Besides using it in a switch statement, we can use the break statement in a loop. 
// A break statement ends the execution of the loop it is in.
for ($i = 0; $i < 50; ++$i) {
  echo "$i<br>";
  if ($i == 4)
    break;
}

// continue statement
// This statement does not cause a loop to end prematurely. 
// Instead, it causes the rest of the loop to be skipped for that particular iteration.
for ($i = 0; $i < 6; ++$i) {
	echo '$i = '.$i.', ';
 
  if ($i == 4) {
    echo '<br>'; 
	  continue; 
  }
 
	echo 'First.'; 
	echo 'Second.<br>';
}

//// Alternative syntax
// if , while , for , foreach , and switch structures.
// This syntax involves changing opening braces to colons ( : ) and the last closing brace to endif; , endwhile; , endfor; , endforeach; , or endswitch; respectively.
// if/else
$a = 5;
if ($a == 5):
	echo '<br>The value of $a is<br>';
	echo $a;
else:
	echo 'Not five';
endif;
?>

<!-- // Displaying HTML code -->
<?php
  for ($i = 0; $i < 3; ++$i): ?>
    <h1>hello</h1>
  <?php endfor; ?>