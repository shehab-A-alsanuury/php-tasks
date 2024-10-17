<?php
// task 1
// a. Convert the entered string to uppercase.
$string = "hello world";
echo strtoupper($string) . "<br>";

// b. Convert the entered string to lowercase.
echo strtolower($string) . "<br>";

// c. Make the first letter of the string uppercase.
echo ucfirst($string) . "<br>";

// d. Make the first letter of each word capitalized.
echo ucwords($string) . "<br><br>";

// task 2
$dateString = '085119';
echo substr($dateString, 0, 2) . ':' . substr($dateString, 2, 2) . ':' . substr($dateString, 4, 2) . "<br><br>";

// task 3
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';
echo (stripos($sentence, $word) !== false) ? "Word Found!" : "Word Not Found!" . "<br><br>";

// task 4
$url = 'www.orange.com/index.php';
echo basename($url) . "<br><br>";

// task 5
$email = 'info@orange.com';
$username = explode('@', $email)[0];
echo $username . "<br><br>";

// task 6
$inputString = 'info@orange.com';
echo substr($inputString, -3) . "<br><br>";

// task 7
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$password = substr(str_shuffle($characters), 0, 8); // Random password of length 8
echo $password . "<br><br>";

// task 8
$originalSentence = 'That new trainee is so genius.';
$replacementWord = 'Our';
$words = explode(' ', $originalSentence);
$words[0] = $replacementWord;
echo implode(' ', $words) . "<br><br>";

// task 9
$string1 = 'dragonball';
$string2 = 'dragonboll';
$firstDifference = '';
$position = -1;

for ($i = 0; $i < min(strlen($string1), strlen($string2)); $i++) {
    if ($string1[$i] !== $string2[$i]) {
        $firstDifference = "First difference between two strings at position " . ($i + 1) . ": \"" . $string1[$i] . "\" vs \"" . $string2[$i] . "\"";
        $position = $i;
        break;
    }
}
echo $firstDifference . "<br><br>";

// task 10
$stringToArray = "Twinkle, twinkle, little star.";
$array = preg_split('/\s+/', $stringToArray);
var_dump($array);
echo "<br><br>";

// task 11
$character = 'a';
echo ++$character . "<br>"; // will wrap from z to a
$character = 'z';
echo ++$character . "<br><br>"; // will wrap from z to a

// task 12
$originalString = 'The brown fox';
$insertString = 'quick';
$insertPosition = strpos($originalString, ' ') + 1;
$resultString = substr_replace($originalString, $insertString . ' ', $insertPosition, 0);
echo $resultString . "<br><br>";

// task 13
$zeroString = '0000657022.24';
echo ltrim($zeroString, '0') . "<br><br>";

// task 14
$removeString = 'The quick brown fox jumps over the lazy dog';
$removeWord = 'fox';
echo str_replace($removeWord, '', $removeString) . "<br><br>";

// task 15
$trailingDashes = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($trailingDashes, '-') . "<br><br>";

// task 16
$specialCharacters = '\"\1+2/3*2:2-3/4*3';
$cleanedString = preg_replace('/[^\d\s]/', '', $specialCharacters);
echo $cleanedString . "<br><br>";

// task 17
$fiveWordsString = 'The quick brown fox jumps over the lazy dog';
$wordsArray = explode(' ', $fiveWordsString);
echo implode(' ', array_slice($wordsArray, 0, 5)) . "<br><br>";

// task 18
$numericString = '2,543.12';
echo str_replace(',', '', $numericString) . "<br><br>";

// task 19
$letters = range('a', 'z');
echo implode(' ', $letters);
?>
