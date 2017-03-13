<?php

$firstname = 'travis';
$lastname = 'wilborn';

echo "hello, my name is $firstname$lastname".PHP_EOL;
// PHP_EOL means end of line and adds a new line that is independent of environment

$condition = true;
if (1<2){
	echo "one is less than two and the world works according to plan.".PHP_EOL;
}

if ($firstname === "ben"){
	echo "hi ben".PHP_EOL;
} else {
	"howdy, $firstname".PHP_EOL;
}

$isAdmin = false;
$isAuthor = true;

if (is_bool($isAdmin) && is_bool($isAuthor)){

	if ($isAuthor && !isAdmin) {
		echo "you can edit artiles youve written, but you dont have adminitstrative rights".PHP_EOL;
	} else if ($isAdmin && !isAuthor) {
		echo "you can add new users and edit this article".PHP_EOL;
	} else if ($isAdmin || $isAuthor){
		echo "you are able to change the content of this article".PHP_EOL;
	} else {
		echo "you can only read the article and you cant manage users".PHP_EOL;
	}
} else {
	echo "both \$isAdmin and \$isAuthor must be boolean types (meaning true/false values)".PHP_EOL;
}