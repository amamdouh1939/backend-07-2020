<?php

// PHP Super Global Variables $_GET and $_POST

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];

?>

<html>
    <body>
        <h1>User Data</h1>
        <p>Your name is <?php echo $firstName . ' ' . $lastName; ?></p>
        <p>Your email is <?php echo $email ?></p>
    </body>
</html>
