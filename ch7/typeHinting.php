<?php
declare(strict_types=1);
//// Type Declaration aka Type Hinting
// - PHP is a loosely typed language. In the examples above, when we declared the parameters of our functions, we did not indicate their data types
// - you may not want the function to run when the data type is incorrect. In cases like that, you can use type declaration.
// - Type declaration allows us to state the data types of a function’s parameters when we declare it.
// - PHP5: Type declaration only works for data types like arrays, not single value data types.
// - PHP7: To use type declaration with scalar data types, we need PHP 7 and above. In addition, we need to add a strict_types declaration to our script and set strict_types to 1.
	
function addNumbersStrict(int $num1, int $num2, int $num3){
	return $num1 + $num2 + $num3;
}
// echo addNumbersStrict('9', '6', '1');
echo addNumbersStrict(9, 6, 1);

// type check the returned value
function addTwoNums($a, $b): int {
  return $a + $b;
}
// echo '<BR>'.addTwoNums(3.9, 1);
echo '<br>'.addTwoNums(3, 1);