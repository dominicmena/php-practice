<?php

$dogName = 'barksAlot';

// echo 'the dogs name is ' . $dogName . ' for sure';

// use a period for concatenation ^^^
// echo "the name of the dog is $dogName";
// double quotes allows for string interpolation

function doubleMe($x) {
    return $x * 2;
}

function tripleMe($x) {
    return $x * 3;
}


// echo tripleMe(doubleMe(10));

$ourNumber = tripleMe(doubleMe(100));

if ($ourNumber > 200) {
    echo 'the number is larger'; 
} else {
    echo 'the number is smaller';
}