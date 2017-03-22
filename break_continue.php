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
