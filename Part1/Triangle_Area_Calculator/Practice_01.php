<?php
/**
 * Calculates the area of a rectangle.
 * 
 * @param float $length Length of the rectangle
 * @param float $width Width of the rectangle
 * @return float The area of the rectangle
 */
function calculateArea(float $length, float $width): float {
    return $length * $width;
}

/**
 * Reverses a given string.
 * 
 * @param string $input The string to reverse
 * @return string The reversed string
 */
function reverseString(string $input): string {
    return strrev($input);
}

/**
 * Checks if a word is a palindrome.
 * 
 * @param string $word The word to check
 * @return string Message stating if the word is a palindrome or not
 */
function checkPalindrome(string $word): string {
    $reversedWord = strrev($word);
    return ($word === $reversedWord) 
        ? "The word '$word' is a palindrome."
        : "The word '$word' is not a palindrome.";
}

// Sample Data
$length = 59;
$width = 8;
$string = "hello world!";
$word = "Racetrack";

// Display Results
echo "Area of Rectangle: " . calculateArea($length, $width) . " square units\n";
echo "Reversed String: " . reverseString($string) . "\n";
echo checkPalindrome($word) . "\n";
?>