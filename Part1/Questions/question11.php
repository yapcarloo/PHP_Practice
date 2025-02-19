<?php
// Question Output
echo "Question 11: What is the output of echo \$hex['red'];?<br><br>";

// Define the $hex associative array with color names as keys and hex values as values
$hex = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF'
];

// Output the value associated with the 'red' key
echo "The hex value for 'red' is: " . $hex['red'];
?>