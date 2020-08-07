<?php

// For Loop

for ($i = 0; $i < 10; $i++) {
    echo "$i";
    echo "<br>";
}

// Initialization $i = 0
// Contiunation Condition $i < 10
// Incrementor $i++
// Loop Body inside the code block

// While loop

$i = 0;

while ($i < 10) {
    echo $i;
    echo "<br>";
    $i++;
}

// Do-While Loop

$i = 11;

do {
    echo $i;
    echo "<br>";
    $i++;
} while ($i < 10);

// Arrays

// Indexed Array

$color1 = "red";
$color2 = "blue";
$color3 = "yellow";

$colors = array("red", "blue", "yellow");

$colors = ["red", "blue", "yellow"];

$mixedArray = ["red", 1, true];

var_dump($colors);

echo "<br>";

echo $colors[1];

// $colors[10] = "black";

$colors[] = "white";

var_dump($colors);
echo "<br>";

// Associative Array

$student = [
    'name' => 'Mohamed',
    'age' => 25,
    'grade' => 'A'
];

echo $student['name'];
echo "<br>";

// Multidimensional Array

$students = [
    [
        'name' => 'Mohamed',
        'age' => 25,
        'grade' => 'A'
    ],
    [
        'name' => 'Mahmoud',
        'age' => 24,
        'grade' => 'B'
    ],
    [
        'name' => 'Maged',
        'age' => 26,
        'grade' => 'C'
    ]
];

// Access the name of the third student

echo $students[2]['name'];
echo "<br>";

// Sum of ages of all students

$sum = 0;

for ($i = 0; $i < count($students); $i++) {
    $sum += $students[$i]['age'];
}

echo $sum;

$grid = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "<br>";

echo $grid[1][1];
echo "<br>";

echo $grid[0][0] + $grid[1][0] + $grid[2][0];
echo "<br>";


$numSum = 0;
for ($i = 0; $i < count($grid); $i++) {
    $numSum += $grid[$i][0];
}

echo $numSum;
echo "<br>";

// Factorial 

$number = 5;
$factorial = 1;

for ($i = $number; $i >= 1; $i--) {
    $factorial *= $i;
}

echo $factorial;
echo "<br>";


$numArray = [1, 2, 3, 4, 5];

foreach($numArray as $singleNumber) {
    echo $singleNumber;
    echo "<br>";
}