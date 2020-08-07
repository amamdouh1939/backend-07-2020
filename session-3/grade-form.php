<?php

if (isset($_POST['grade'])) {
    $grade = $_POST['grade'];
    if ($grade > 50) {
        echo "Passed";
    } else {
        echo "Failed";
    }
}


?>

<html>

    <body>
        <h1>Enter your grade</h1>
        <form method="POST">
            <label>Grade</label>
            <input name="grade">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>