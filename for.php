<?php

$min = $argv[1];
$max = $argv[2];
$increment = $argv[3];

for ($i= $min; $i<=$max; $i+=$increment){
	echo "\$i has a value of {$i}\n";
}
