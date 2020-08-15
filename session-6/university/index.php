<?php

require_once('./Person.php');
require_once('./FacultyMember.php');
require_once('./Student.php');

Person::setType('Human');
echo Person::getType();
echo "<br>";

$person = new Person('John', 'john@email.com');

echo $person->getName();
echo "<br>";
echo $person->getEmail();
$person->setName('Jack');
$person->setEmail('jack@email.com');
echo "<br>";
echo $person->getName();
echo "<br>";
echo $person->getEmail();
echo "<br>";
$person->goUp();
echo "<br>";
$person->talk();
echo "<br>";
$person->talk('Programming');
echo "<br>";
$person->talk('Programming', 'Sleeping');
echo "<br>";
$person->talk('Programming', 'Sleeping', 'PHP');
echo "<br>";



$facultyMember = new FacultyMember('Adam', 'adam@email.com', 'CSS');
echo $facultyMember->getName();
echo "<br>";
$facultyMember->goUp();
echo "<br>";
echo $facultyMember->getSubject();
$facultyMember->setSubject('Maths');
echo "<br>";
echo $facultyMember->getSubject();
echo "<br>";
$facultyMember->talk();
echo "<br>";
$facultyMember->talk('Lectures');
echo "<br>";
$facultyMember->talk('Lectures', 'Classes');
echo "<br>";


$student = new Student('Student', 'student@university.com', 'Senior Year');

echo $student->getGrade();
echo "<br>";
$student->goUp();