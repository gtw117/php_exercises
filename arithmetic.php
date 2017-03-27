<?php

$a = 6;
$b = 0;

if (!is_numeric($a) || !is_numeric($b)){
	echo "ERROR: please use numbers only".PHP_EOL;
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
		echo "cannot divide by ZERO".PHP_EOL;
	} else{
		return $as / $b .PHP_EOL;
	}
	

}

function modulus($a, $b){
	if ($b <= 0){
		echo "cannot divide by ZERO".PHP_EOL;
	} else{
	return $a % $b . PHP_EOL;
	}
}





echo add(6, 0);
echo subtract(6, 0);
echo multiply(6, 0);
echo divide(6, 0);
echo modulus(6,0);