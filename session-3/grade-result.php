<?php

$grade = $_POST['grade'];

if ($grade > 50) {
    echo "Passed";
} else {
    echo "Failed";
}