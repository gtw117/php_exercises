<?php

$min = $argv[1];
$max = $argv[2];
$increment = $argv[3];

//please enter 3 arguments, first = min, second = max, third = increment. 

if (sizeof($argv) < 3){
	echo "please RESTART and enter 3 arguments, first = min, second = max, third = increment. ".PHP_EOL;
} 

//if input is not a number do this...
do {
	if(!is_numeric($min)){
		fwrite(STDERR, "argument used for MIN is not a number, please use only numbers!".PHP_EOL);
		$min = trim(fgets(STDIN));
	}
	if(!is_numeric($max)){
		fwrite(STDERR, "argument used for MAX is not a number, please use only numbers!".PHP_EOL);
		$max = trim(fgets(STDIN));
	}
	if(!is_numeric($increment)){
		fwrite(STDERR, "no increment argument detected: \n DEFALUT increment = 1".PHP_EOL);
		$increment = 1;
	}
} while (!is_numeric($min) || !is_numeric($max) || !is_numeric($increment));

echo "min = $min and max = $max".PHP_EOL;



for ($i= $min; $i<=$max; $i+=$increment){
	echo "\$i has a value of {$i}\n";
}
