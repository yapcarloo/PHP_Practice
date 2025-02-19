<?php
$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

$row = 0;
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) {
            echo $matrix[$row][$col] . " ";
        }
        $col++;
    }
    $row++;
}
?>