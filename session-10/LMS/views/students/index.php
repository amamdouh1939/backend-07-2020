<?php

require_once('./models/Student.php');

$students = Student::all();


?>

<html>
    <body>
        <h1>students</h1>

        <table border="1" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Occupation</th>
                    <th>Education</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($students as $student) {
                        ?>
                        <tr>
                            <td><?= $student->id ?></td>
                            <td><?= $student->first_name ?></td>
                            <td><?= $student->last_name ?></td>
                            <td><?= $student->email ?></td>
                            <td><?= $student->phone ?></td>
                            <td><?= $student->occupation ?></td>
                            <td><?= $student->education ?></td>
                            <td>
                                <a href="./views/students/show.php?id=<?= $student->id ?>">Show</a>
                                <a href="./views/students/edit.php?id=<?= $student->id ?>">Edit</a>
                                <a href="./views/students/delete.php?id=<?= $student->id ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="./views/students/create.php">Create New student</a>
    </body>
</html>