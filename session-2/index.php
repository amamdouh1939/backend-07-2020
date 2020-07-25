<?php

$a = 2;
$b = 2;

// Conditional Statements

// if statement

if ($b > 5) {
    echo $a - $b;
}
echo "<br>";

// if-else statement

if ($b > 5) {
    echo $a - $b;
} else {
    echo $a + $b;
}
echo "<br>=========================<br>";

// if-else if-else statement

if ($b > 0 && $b <= 5) {
    echo $a * $b;
} else if ($b > 5 && $b < 10) {
    echo $a + $b;
} else {
    echo $a - $b;
}
echo "<br>";

// switch statement

$number = 1;

switch ($number) {
    case 1:
        echo "The number is one";
        break;

    case 2:
        echo "The number is two";
        break;

    case 3:
        echo "The number is three";
        break;
    
    default:
        echo "I don't know this number";
}