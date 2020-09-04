<?php

require_once('../../config/dbConnect.php');
require_once('../../models/Instructor.php');

$id = $_GET['id'];

$existingInstructor = Instructor::show($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instructor = new Instructor();

    $instructor->setFirstName($_POST['first_name']);
    $instructor->setLastName($_POST['last_name']);
    $instructor->setEmail($_POST['email']);
    $instructor->setPhone($_POST['phone']);
    $instructor->setOccupation($_POST['occupation']);
    $instructor->setPosition($_POST['position']);

    $instructor->update($id);

    header('Location: ../../index.php?p=instructors');
}

?>

<html>
    <body>
        <h1>Edit <?= $existingInstructor->first_name . ' ' . $existingInstructor->last_name ?></h1>

            <form method="POST">
                <label>First Name</label>
                <input name="first_name" value="<?= $existingInstructor->first_name ?>">
                <br>
                <br>
                
                <label>Last Name</label>
                <input name="last_name" value="<?= $existingInstructor->last_name ?>">
                <br>
                <br>            
                <label>Email</label>
                <input name="email" value="<?= $existingInstructor->email ?>">
                <br>
                <br>            
                <label>Phone Number</label>
                <input name="phone" value="<?= $existingInstructor->phone ?>">
                <br>
                <br>            
                <label>Occupation</label>
                <input name="occupation" value="<?= $existingInstructor->occupation ?>">
                <br>
                <br>            
                <label>Position</label>
                <input name="position" value="<?= $existingInstructor->position ?>">
                <br>
                <br>
                <button type="submit">Submit</button>
            </form>
    </body>
</html>