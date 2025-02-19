<?php
// Question Output
echo "Question 15: What is the output of var_dump(\$chunkedArray);?<br><br>";

// Define an array of numbers
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Use array_chunk to split the array into chunks of 3 elements each
$chunkedArray = array_chunk($numbers, 3);

// Output the structure and values of $chunkedArray
echo "The output of var_dump(\$chunkedArray) is:<br>";
var_dump($chunkedArray);
?>