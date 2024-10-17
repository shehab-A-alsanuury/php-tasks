<?php
// Task 1: Display numbers from 1 to 10
echo implode('-', range(1, 10));
echo "<br><br>";

// Task 2: Sum of integers between 0 and 30
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total;
echo "<br><br>";

// Task 3: Generate pattern with nested for loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < $i) {
            echo "A ";
        } else {
            echo chr(65 + $j - $i) . " "; // ASCII A=65
        }
    }
    echo "<br>";
}
echo "<br>";

// Task 4: Generate another pattern with nested for loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < 2 - $i) {
            echo "1 ";
        } elseif ($j >= 2 - $i && $j <= 2 + $i) {
            echo ($i + 1) . " ";
        } else {
            echo "1 ";
        }
    }
    echo "<br>";
}
echo "<br>";

// Task 5: Generate yet another pattern with nested for loop
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i === $j) {
            echo "$i ";
        } else {
            echo "0 ";
        }
    }
    echo "<br>";
}
echo "<br>";

// Task 6: Calculate factorial using for loop
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}
echo factorial(5); // Outputs: 120
echo "<br><br>";

// Task 7: Calculate Fibonacci sequence using for loop
$fibonacci = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
echo implode(', ', $fibonacci);
echo "<br><br>";

// Task 8: Count "c" characters in the text
$text = "Orange Coding Academy";
$countC = substr_count(strtolower($text), 'c'); // Case insensitive
echo $countC; // Outputs: 2
echo "<br><br>";

// Task 9: Create multiplication table using for loops
echo "<table cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i * $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table><br><br>";

// Task 10: FizzBuzz program
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 === 0) {
        echo "Fizz ";
    } elseif ($i % 5 === 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
echo "<br><br>";

// Task 11: Generate Floyd's triangle
$number = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number++ . " ";
    }
    echo "<br>";
}
echo "<br>";

// Task 12: Print the specified pattern
$letters = range('A', 'E');
for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}
?>
