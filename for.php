<?php
echo "please ENTER 3 arguments, first = min, second = max, third = increment".PHP_EOL;

if (isset($argv[1]) && isset($argv[2]) && isset($argv[3])){
	$min = $argv[1];
	$max = $argv[2];
	$increment = $argv[3];
} else {
	echo"please enter MIN:".PHP_EOL;
	$min = trim(fgets(STDIN));
	echo"please enter MAX:".PHP_EOL;
	$max = trim(fgets(STDIN));
	echo"please enter INCREMENT:".PHP_EOL;
	$increment = trim(fgets(STDIN));

}


//please enter 3 arguments, first = min, second = max, third = increment. 

if (($argv) < 3){
	echo "---> CONTINUE as prompted with a default increment of 1\n---> RESTART to enter 3 arguments, first = min, second = max, third = increment  ".PHP_EOL;
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

echo "(MIN = $min) -- (MAX = $max) -- (INCREMENT = $increment)".PHP_EOL;


for ($i= $min; $i<=$max; $i+=$increment){
	echo "{$i}\n";
}
