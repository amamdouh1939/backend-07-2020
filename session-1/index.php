<?php

echo "Name";
echo "<br>";

echo 123;
echo "<br>";

echo -124.323;
echo "<br>";

// In PHP true is printed as 1
echo true;
echo "<br>";

// In PHP false is not printed at all
echo false;
echo "<br>";

print "Name";
print "Name";
print "<br>";

print print "Name";

// Legal Variables
$number = 1;

$_number = 1;

$number1 = 1;

// Illegal Variables
// $1number = 1;

// $number-1

echo $number;

// Operators
$a = 5;
$b = 6;
echo "<br>";

echo $a + $b;
echo "<br>";


echo $a - $b;
echo "<br>";


echo $a / $b;
echo "<br>";


echo $a * $b;
echo "<br>";

echo $b % $a;
echo "<br>";

$c = 10;

$c += 2;
// $c = $c + 2;
echo $c;
echo "<br>";

$c -= 3;
echo $c;
echo "<br>";

$c *= 5;
echo $c;
echo "<br>";

$c /= 2;
echo $c;
echo "<br>";

echo (1 == "1");
echo "<br>";

echo (1 === "1");
echo "<br>";

echo 1 > 2;
echo "<br>";

echo 2 > 1;
echo "<br>";

echo 3 >= 1;
echo "<br>";

echo 5 <= 2;
echo "<br>";

echo 1 != "1";
echo "<br>";

echo 1 !== "1";
echo "<br>";

$d = 5;
$e = 10;

$f = 6;
$g = 7;

echo ($d < $e) && ($f < $g);
echo "<br>";

echo ($d > $e) && ($f < $g);
echo "<br>";

echo ($d < $e) && ($f > $g);
echo "<br>";

echo ($d < $e) || ($f < $g);
echo "<br>";

echo ($d > $e) || ($f < $g);
echo "<br>";

echo ($d < $e) || ($f > $g);
echo "<br>";

echo ($d > $e) || ($f > $g);
echo "<br>";

$h = true;
echo !$h;

$j = false;
echo !$j;
echo "<br>";

$firstString = "PH";
$secondString = "P";

echo $firstString . $secondString;
echo "<br>";

$name = "John";

$name .= " ";
$name .= "Doe";

echo $name;
echo "<br>";

echo '$name';
echo "<br>";

echo "$name";

echo "Git";