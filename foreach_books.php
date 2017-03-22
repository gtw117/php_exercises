<?php


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


//1 .need to Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

//2.Update your loop to only show books that were written after 1950.











$students = array(
	array('name' => 'virginia potts', 'age' => 29),
	array('name' => 'elon musk', 'age' => 42),
	array('name' => 'rasmus lerdorf', 'age' => 45),
	array('name' => 'marissa mayer', 'age' => 38)
);

foreach ($students as $student) {
	foreach ($student as $key => $value) {
		echo "Student's $key is $value \n";
	}
}