<?php
// basic function declaration
function functionName($listOfParameters) {
  //code to be executed;
  echo $listOfParameters;
	//return statements, if any result... needs to be returned
}

function displayGreetings(){
	echo 'Hello, displayGreetings function 🤗<br>';
}

displayGreetings();

// using the params/args of a function
function displayGreetings2($name, $message){
	echo "Hello $name, $message <br>";
}

displayGreetings2('👻', 'good morning');

// provide default args for params
// - params w/ defaults must come at the end of the list, after the ones w/o defaults
function displayGreetings3($name, $message = 'have a good day'){
	echo "Hello $name, $message<br>";
}

displayGreetings3('🐄');
displayGreetings3('🐮', 'how are you?');

// return a value from our function (return ends the process in the function before 'hello' can be echoed)
function addNumbers($num1, $num2, $num3){
	return $num1 + $num2 + $num3;
	echo 'Hello<br>';
}

echo addNumbers(9, 6, 1);
echo '<br>';
?>
