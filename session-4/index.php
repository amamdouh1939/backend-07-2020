<?php

// var_dump($_SERVER);

var_dump($_REQUEST);
var_dump($_GET);
var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['number'])) {
        $number = $_POST['number'];
        echo $number;
    }
}

?>

<html>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="number">
            <button>Submit</button>
        </form>
    </body>
</html>