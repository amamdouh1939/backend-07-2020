<?php

    require_once('./models/Instructor.php');
    $instructors = Instructor::all();
?>

<html>
    <body>
        <h1>Instructors</h1>

        <table border="1" cellspacing="0" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Occupation</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($instructors as $instructor) {
                        ?>
                        <tr>
                            <td><?= $instructor->id ?></td>
                            <td><?= $instructor->first_name ?></td>
                            <td><?= $instructor->last_name ?></td>
                            <td><?= $instructor->email ?></td>
                            <td><?= $instructor->phone ?></td>
                            <td><?= $instructor->occupation ?></td>
                            <td><?= $instructor->position ?></td>
                            <td>
                                <a href="./views/instructors/show.php?id=<?= $instructor->id ?>" class="btn btn-sm btn-info">Show</a>
                                <a href="./views/instructors/edit.php?id=<?= $instructor->id ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="./views/instructors/delete.php?id=<?= $instructor->id ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="./views/instructors/create.php" class="btn btn-lg btn-success">Create New Instructor</a>
    </body>
</html>