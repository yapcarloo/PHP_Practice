<?php
/**
 *
 * @param string 
 * 
 * @return int 
 */
function calculateStringLength(string $text): int {
    return strlen($text);
}

/*
 *
 * @param string 
 * @param string 
 * @param int 
 * 
 * @return int|false The position of the first occurrence of the substring, or false if not found.
 */
function findSubstringPosition(string $haystack, string $needle, int $offset = 0) {
    return strpos($haystack, $needle, $offset);
}

/**

 *
 * @param string 
 * @param int 
 * @param int|null
 * 
 * @return string
 */
function extractSubstring(string $text, int $start, ?int $length = null): string {
    return substr($text, $start, $length);
}

/**
 *
 * @param string 
 * @param string 
 * @param string 
 * 
 * @return string
 */
function replaceSubstring(string $search, string $replace, string $subject): string {
    return str_replace($search, $replace, $subject);
}

/**
 *
 * @param array
 * @param array
 * 
 * @return string
 */
function joinArrayElements(string $separator, array $array): string {
    return implode($separator, $array);
}

// Example Usage
$text = "Hello, World!";
$length = calculateStringLength($text); 
echo "String Length: $length\n";

$sentence = "The quick brown fox";
$position = findSubstringPosition($sentence, "quick"); 
echo "Position of 'quick': $position\n";

$substring = extractSubstring($text, 0, 8); 
echo "Extracted Substring: $substring\n";

$newText = replaceSubstring("PHP", "JavaScript", "I love PHP!"); 
echo "Replaced Text: $newText\n";

$colors = ["red", "green", "blue"];
$result = joinArrayElements(", ", $colors); 
echo "Joined Colors: $result\n";
?>