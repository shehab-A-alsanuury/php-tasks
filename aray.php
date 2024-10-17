<?php
// Task 1: Generate Paragraph from Array
$colors = array('white', 'green', 'red');

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[2]} carpet, the {$colors[1]} lawn, the {$colors[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
echo "<br><br>";

// Task 2: Display Colors as Unordered List
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
echo "<br><br>";

// Task 3: Display Country and Capital, Sorted by Capital
$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
echo "<br><br>";

// Task 4: Display First Element of Array
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color); // Outputs: white
echo "<br><br>";

// Task 5: Insert New Item into Array at Specific Position
function insertItem($array, $position, $newItem) {
    return array_merge(
        array_slice($array, 0, $position - 1),
        array($newItem),
        array_slice($array, $position - 1)
    );
}

$array = [1, 2, 3, 4, 5];
$position = 4;
$newItem = '$';

$result = insertItem($array, $position, $newItem);
print_r($result);
echo "<br><br>";

// Task 6: Sort Associative Array by Key
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
echo "<br><br>";

// Task 7: Calculate Average Temperature and Display Five Lowest and Highest Temperatures
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowest = array_slice($temperatures, 0, 5);
$highest = array_slice($temperatures, -5);

echo "Average Temperature is: " . round($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(', ', $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highest) . "<br>";
echo "<br><br>";

// Task 8: Merge Two Arrays
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br><br>";

// Task 9: Convert Strings to Uppercase
function arrayToUpperCase($arr) {
    return array_map('strtoupper', $arr);
}

$colors = array("red", "blue", "white", "yellow");
print_r(arrayToUpperCase($colors));
echo "<br><br>";

// Task 10: Convert Strings to Lowercase
function arrayToLowerCase($arr) {
    return array_map('strtolower', $arr);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");
print_r(arrayToLowerCase($colors));
echo "<br><br>";

// Task 11: Display Numbers Divisible by 4 Between 200 and 250
$result = range(200, 250, 4);
echo implode(', ', $result);
echo "<br><br>";

// Task 12: Get Shortest and Longest String Length from Array
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$lengths = array_map('strlen', $words);
echo "The shortest array length is " . min($lengths) . ".<br>";
echo "The longest array length is " . max($lengths) . ".<br>";
echo "<br><br>";

// Task 13: Generate Unique Random Numbers Within a Range
function generateUniqueRandomNumbers($min, $max, $count) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

$result = generateUniqueRandomNumbers(11, 20, 10);
echo implode(' ', $result);
echo "<br><br>";

// Task 14: Return Lowest Integer That Is Not 0
$array1 = array(2, 0, 10, 12, 6);
$nonZero = array_filter($array1);
echo min($nonZero);
?>
