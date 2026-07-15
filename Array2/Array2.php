<?php
$phrase = "Coding in PHP is fun!";
$search = "PHP";

$position = strpos($phrase, $search);

echo "The word '$search' starts at position: " . $position;
// Output: The word 'PHP' starts at position: 10
?>