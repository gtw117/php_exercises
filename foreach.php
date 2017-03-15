<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//give data type of data:
foreach($things as $type){
	if(is_int($type)){
		echo "'{$type}' is an integer.".PHP_EOL;
	}
	if(is_bool($type)){
		echo "'{$type}' is of boolean nature.".PHP_EOL;
	}
	if(is_array($type)){
		foreach($type as $data){
			echo "{$data} is in an array.".PHP_EOL; ;
		}
	}
	if(is_null($type)){
		echo "contains nothing, is null.".PHP_EOL;
	}
	if(is_string($type)){
		echo"'{$type}' is a string.".PHP_EOL;
	}
}
//if scalar:
foreach($things as $scalar){
	echo "the following are found to be SCALAR:".PHP_EOL;
	if(is_scalar($scalar)){
		echo "--->{$scalar} is SCALAR.".PHP_EOL;
	}
}
//echo out each of item, even if its in an array:
foreach($things as $thingys){
	echo "***{$thingys}***".PHP_EOL;
	if(is_array($thingys)){
		foreach($thingys as $arrayContents){
			echo "***{$arrayContents}***".PHP_EOL;
		}
	}
}