<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch user inputs
    $text = $_POST['text'];
    $sortOrder = $_POST['sort'];
    $limit = (int) $_POST['limit'];

    // List of common stop words
    $stopWords = ["the", "and", "in", "to", "of", "a", "for", "on", "with", "as", "at"];

    // Extract words using regex (removes punctuation)
    preg_match_all('/\b\w+\b/', strtolower($text), $matches);
    $words = $matches[0];

    // Filter out stop words
    $filteredWords = array_filter($words, function($word) use ($stopWords) {
        return !in_array($word, $stopWords);
    });

    // Count word frequencies
    $wordCounts = array_count_values($filteredWords);

    // Sort words by frequency
    if ($sortOrder == 'desc') {
        arsort($wordCounts);
    } else {
        asort($wordCounts);
    }

    // Limit results and preserve keys
    $wordCounts = array_slice($wordCounts, 0, $limit, true);

    // Display the result
    echo "<h2>Word Frequency Counter Result</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Word</th><th>Frequency</th></tr>";
    foreach ($wordCounts as $word => $count) {
        echo "<tr><td>" . htmlspecialchars($word) . "</td><td>" . $count . "</td></tr>";
    }
    echo "</table>";
}
?>