<?php

$a = 6;
$b = 0;


// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own throwErrorMessage() function, have the other functions use it for error messaging.

// 6.4.1

function throwError($a, $b){
	if (!is_numeric($a) || !is_numeric($b)){
		echo "ERROR: $a or $b are not numeric, please use numbers only".PHP_EOL;
	}

	if ($b <= 0){
		echo "cannot divide by $b".PHP_EOL;
	}
}

function add($a, $b){
	return $a + $b .PHP_EOL;
}

function subtract($a, $b){
	return $a - $b .PHP_EOL;
}

function multiply($a, $b){
	return $a * $b .PHP_EOL;
}

function divide($a, $b){
	if ($b <= 0){
		return throwError($a, $b);
	} else {
	return $a / $b .PHP_EOL;
	}
}

function modulus($a, $b){
	if ($b <= 0){
		return throwError($a, $b);
	} else {
	return $a / $b .PHP_EOL;
	}
}



echo add(6, 0);
echo subtract(6, 0);
echo multiply(6, 0);
echo divide(6, 0);
echo modulus(6,0);