<?php

if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'username') {
        $username = $_POST['username'];
        echo $username;
    }

    if ($_POST['submit'] == 'name') {
        $name = $_POST['name'];
        echo $name;
    }

}

/*if (isset($_POST['username'])) {
    $username = $_POST['username'];
    echo $username;
}*/

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    echo $username;
}*/

/*if (!empty($_POST)) {
    $username = $_POST['username'];
    echo $username;
}*/

?>

<form method="post">
    <input type="text" name="username">
    <input type="submit" name="submit" value="username" />
</form>

<form method="post">
    <input type="text" name="name">
    <input type="submit" name="submit" value="name" />
</form>
