<?php
$filename = 'text.txt';
function countWordFrequencies($filename) {
    $content = file_get_contents($filename);
    $content = strtolower($content);
    $content = preg_replace('/[^a-zа-яё\s]/u', ' ', $content);
    $words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
    $wordFrequencies = array_count_values($words);
    arsort($wordFrequencies);

    return $wordFrequencies;
}
$wordFrequencies = countWordFrequencies($filename);

echo "Список слов и их частота:\n";
foreach ($wordFrequencies as $word => $frequency) {
    echo "$word: $frequency\n";
}
?>
