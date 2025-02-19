<?php
// Question Output
echo "Question 14: What is the output of echo \$people[2]['email'];?<br><br>";

// Define the $people array with two elements
$people = [
    [
        'name' => 'James Yap',
        'age' => 30,
        'email' => 'jamesyap@yahoo.com'
    ],
    [
        'name' => 'Jake Cruz',
        'age' => 25,
        'email' => 'jakecruz@yahoo.com'
    ]
];

// Check if the index exists before accessing
if (isset($people[2]['email'])) {
    echo "The email of the third person is: " . $people[2]['email'];
} else {
    echo "There is no third person in the array.";
}
?>