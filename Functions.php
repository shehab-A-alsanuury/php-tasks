<?php
// 1. Check if a number is a prime number
function isPrime($number) {
    if ($number < 2) return "$number is not a prime number";
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "$number is not a prime number";
        }
    }
    return "$number is a prime number";
}

// 2. Reverse a string
function reverseString($string) {
    return strrev($string);
}

// 3. Check if all string characters are lowercase
function checkLowercase($string) {
    return ctype_lower($string) ? "Your String is Ok" : "Your String is not Ok";
}

// 4. Swap two variables (method 1)
function swapVariables(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// 5. Swap two variables (method 2)
function swapVariablesWithoutTemp(&$x, &$y) {
    list($x, $y) = [$y, $x];
}

// 6. Check if a number is an Armstrong number
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, 3);
        $temp = (int)($temp / 10);
    }
    return $sum == $number ? "$number is an Armstrong Number" : "$number is not an Armstrong Number";
}

// 7. Check if a string is a palindrome
function isPalindrome($string) {
    $cleaned = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
    return $cleaned === strrev($cleaned) ? "Yes, it is a palindrome" : "No, it is not a palindrome";
}

// 8. Remove duplicates from an array
function removeDuplicates($array) {
    return array_unique($array);
}

// Testing the functions

echo "1. " . isPrime(3) . "\n";
echo "2. " . reverseString("remove") . "\n";
echo "3. " . checkLowercase("remove") . "\n";

$x = 12;
$y = 10;
swapVariables($x, $y);
echo "4. Swapped: x = $x, y = $y\n";

$x = 12;
$y = 10;
swapVariablesWithoutTemp($x, $y);
echo "5. Swapped (no temp): x = $x, y = $y\n";

echo "6. " . isArmstrong(407) . "\n";
echo "7. " . isPalindrome("Eva, can I see bees in a cave?") . "\n";

$array1 = [2, 4, 7, 4, 8, 4];
print_r(removeDuplicates($array1));

?>
