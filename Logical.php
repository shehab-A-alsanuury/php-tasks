<?php

// 1. Check if a year is a leap year
function isLeapYear($year) {
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        return "This year is a leap year";
    } else {
        return "This year is not a leap year";
    }
}

// 2. Check the season based on temperature
function checkSeason($temperature) {
    return $temperature < 20 ? "It is wintertime!" : "It is summertime!";
}

// 3. Calculate sum or triple sum of two integers
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return $firstInteger == $secondInteger ? $sum * 3 : $sum;
}

// 4. Check if sum equals 30, return sum or false
function checkSumThirty($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return $sum == 30 ? $sum : false;  // returns boolean false, not a string
}

// 5. Check if a number is a multiple of 3
function isMultipleOfThree($number) {
    return $number % 3 == 0;  // returns true or false as boolean
}

// 6. Check if a number is in the range [20-50]
function isInRange($number) {
    return ($number >= 20 && $number <= 50);  // returns true or false as boolean
}

// 7. Find the largest number among three integers
function findLargest($numbers) {
    return max($numbers);
}

// 8. Calculate electricity bill
function calculateElectricityBill($units) {
    if ($units <= 50) {
        return $units * 2.50;
    } elseif ($units <= 150) {
        return (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        return (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        return (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }
}

// 9. Calculator with the four main operations
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return $num2 != 0 ? $num1 / $num2 : "Error: Division by zero";
        default:
            return "Invalid operation";
    }
}

// 10. Check if a person is eligible to vote
function canVote($age) {
    return $age >= 18 ? "is eligible to vote" : "is not eligible to vote";
}

// 11. Check if a number is positive, negative or zero
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// 12. Calculate grade based on average score
function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);
    if ($average < 60) return 'F';
    if ($average < 70) return 'D';
    if ($average < 80) return 'C';
    if ($average < 90) return 'B';
    return 'A';
}

// Test cases
echo "1. " . isLeapYear(2013) . "\n";                    // "This year is not a leap year"
echo "2. " . checkSeason(27) . "\n";                      // "It is summertime!"
echo "3. " . calculateSum(2, 2) . "\n";                   // 12 (triple sum)
echo "4. " . (checkSumThirty(10, 10) ? 'true' : 'false') . "\n";  // false
echo "5. " . (isMultipleOfThree(20) ? 'true' : 'false') . "\n";   // false
echo "6. " . (isInRange(50) ? 'true' : 'false') . "\n";   // true
echo "7. " . findLargest([1, 5, 9]) . "\n";               // 9
echo "8. " . calculateElectricityBill(300) . " JOD\n";    // Bill for 300 units
echo "9. " . calculator(10, 5, 'add') . "\n";             // 15
echo "10. " . canVote(15) . "\n";                         // "is not eligible to vote"
echo "11. " . checkNumber(-60) . "\n";                    // "Negative"
echo "12. " . calculateGrade([60,86,95,63,55,74,79,62,50]) . "\n"; // "D"
?>
