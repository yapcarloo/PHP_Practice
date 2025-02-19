<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

$row = 0;
do {
    $col = 0;
    do {
        if ($matrix[$row][$col] % 2 == 0) {
            echo $matrix[$row][$col] . " ";
        }
        $col++;
    } while ($col < count($matrix[$row]));

    $row++;
} while ($row < count($matrix));
?>