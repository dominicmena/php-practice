<?php

require __DIR__ . '/vender/autoload.php'; 
// autoloads the files ^^
use Cocur\Slugify\Slugify;
// same as import in node

$slugify = new Slugify();
echo $slugify->slugify('the sky is blue and the grass is green');

// $dogName = 'barksAlot';

// echo 'the dogs name is ' . $dogName . ' for sure';

// use a period for concatenation ^^^
// echo "the name of the dog is $dogName";
// double quotes allows for string interpolation

// function doubleMe($x) {
//     return $x * 2;
// }

// function tripleMe($x) {
//     return $x * 3;
// }


// echo tripleMe(doubleMe(10));

// $ourNumber = tripleMe(doubleMe(100));

// if ($ourNumber > 200) {
//     echo 'the number is larger'; 
// } else {
//     echo 'the number is smaller';
// }

// using server by typing php -S localhost:8000, also renamed file to index.php