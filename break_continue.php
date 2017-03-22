<?php

// Create a for loop that shows all even numbers between 1 and 100 using continue.

// Create another for loop that counts from 1 to 100, but stops after 10 using break.

echo "This counts from 1-100 using even numbers".PHP_EOL;
for ($i = 1; $i <= 100; $i++){
	if ($i %2 == 1){
		continue;
	}
	echo $i. "\n".PHP_EOL;
}

echo "The following stops after counting to 10".PHP_EOL;
for ($k = 1; $k <= 100; $k++){
	echo $k. "\n".PHP_EOL;
	if ($k == 10){
		break;
	}
}