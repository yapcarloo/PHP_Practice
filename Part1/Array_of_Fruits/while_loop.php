<?php
$fruits = array("Mango", "Atis", "Guava", "Strawberry", "Orange");

$i = 0;

echo "<ol>";
while ($i < count($fruits)) {
    echo "<li>" . $fruits[$i] . "</li>";
    $i++;
}

echo "</ol>";
?>