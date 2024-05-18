
<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = '[aeiouAEIOU]';
foreach ($strings as $string) {
    $vowelCount = preg_match_all("/$vowels/", $string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n ";
}
?>