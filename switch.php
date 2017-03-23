 <?php

 // Set the default timezone
date_default_timezone_set('America/Chicago');


// Get Day of Week as number

echo date('N').PHP_EOL;

// 1 (for Monday) through 7 (for Sunday)

$dayOfWeek = date('N');


switch($dayOfWeek) {
    case 1:
        echo "monday".PHP_EOL;
        break;
    case 2:
        echo "tuesday".PHP_EOL;
        break;
    case 3:
        echo "wednesday".PHP_EOL;
        break;
    case 4:
        echo "thursday".PHP_EOL;
        break;
    case 5:
        echo "friday".PHP_EOL;
        break;
    case 6:
        echo "saturday".PHP_EOL;
        break;
    case 7:
        echo "sunday".PHP_EOL;
        break;
}

echo "==========================================".PHP_EOL;

// 2.Test and verify the results before proceeding by creating a matching if block. The output should be identical.

if ($dayOfWeek == 1){
	echo "monday".PHP_EOL;
}else if ($dayOfWeek == 2){
	echo "tuesday".PHP_EOL;
}else if ($dayOfWeek == 3){
	echo "wednesday".PHP_EOL;
}else if ($dayOfWeek == 4){
	echo "thursday".PHP_EOL;
}else if ($dayOfWeek == 5){
	echo "friday".PHP_EOL;
}else if ($dayOfWeek == 6){
	echo "saturday".PHP_EOL;
}else if ($dayOfWeek == 7){
	echo "sunday".PHP_EOL;
}







