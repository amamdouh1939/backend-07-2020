<?php
if (isset($_POST['register'])) {
    $errors = [];

    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is required';
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required';
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required';
    }

    if (empty($_POST['re_password'])) {
        $errors['re_password'] = 'Re-Password is required';
    }

    if (!empty($_POST['re_password']) && !empty($_POST['password']) && $_POST['re_password'] !== $_POST['password']) {
        $errors['re_password'] = 'Re-Password not match';
    }

    if (count($errors) == 0) {
        echo 'Done';
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
    </head>
    <body>
        <form method="post">
            <label for="">Name</label>
            <input type="text" name="name" value="<?= isset($_POST['name'])? $_POST['name'] : '' ?>">
            <span style="color: red"><?= isset($errors['name'])? $errors['name'] : '' ?></span>
            <br>
            <br>
            <label for="">Email</label>
            <input type="email" name="email" value="<?= isset($_POST['email'])? $_POST['email'] : '' ?>">
            <span style="color: red"><?= isset($errors['email'])? $errors['email'] : '' ?></span>
            <br>
            <br>
            <label for="">Password</label>
            <input type="password" name="password">
            <span style="color: red"><?= isset($errors['password'])? $errors['password'] : '' ?></span>
            <br>
            <br>
            <label for="">Re-Password</label>
            <input type="password" name="re_password">
            <span style="color: red"><?= isset($errors['re_password'])? $errors['re_password'] : '' ?></span>
            <br>
            <br>
            <input type="submit" name="register" value="Register">
        </form>
    </body>
</html>
