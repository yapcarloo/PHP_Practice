<?php
// Question Output
echo "Question 2: What is the output of var_dump(\$person);?<br><br>";

// Define the $person array
$person = [
    'name' => 'Jean Carlo Yap',
    'age' => 24,
    'email' => 'yapjeancarlo@gmail.com'
];

// Use var_dump to print the array with type information
echo "The output of var_dump(\$person):<br>";
var_dump($person);
?>