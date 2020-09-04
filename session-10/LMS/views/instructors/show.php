<?php

require_once('../../config/dbConnect.php');
require_once('../../models/Instructor.php');

$id = $_GET['id'];

$instructor = Instructor::show($id);

?>

<html>
    <body>
        <h1>Show <?= $instructor->first_name . ' ' . $instructor->last_name ?></h1>
        <hr>
        <p>Email: <?= $instructor->email ?></p>
        <p>Phone: <?= $instructor->phone ?></p>
        <p>Occupation: <?= $instructor->occupation ?></p>
        <p>Position: <?= $instructor->position ?></p>
    </body>
</html>