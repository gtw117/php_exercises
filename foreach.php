<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $type){
	if(is_int($type)){
		echo "{$type} is an integer.".PHP_EOL;
	}else if(is_bool($type)){
		echo "{$type} is of boolean nature.".PHP_EOL;
	}else if(is_array($type)){
		echo "{$type} is an array.".PHP_EOL;
	}else if(is_null($type)){
		echo "{$type} contains nothing, is null.".PHP_EOL;
	}else if(is_string($type)){
		echo"{$type} is a string.".PHP_EOL;
	}
}