<?php
// Question Output
echo "Question 10: In PHP, how will you change the green into white in the \$colors array?<br><br>";

// Define the $colors array with sample values
$colors = ["Red", "Green", "Blue", "Yellow", "Purple"];

// Change the value of "Green" to "White"
$colors[1] = "White"; // Index 1 corresponds to "Green"

// Output the modified array
echo "The updated colors array is: ";
print_r($colors);
?>