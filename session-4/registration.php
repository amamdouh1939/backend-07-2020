<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        var_dump($_POST);

        $errors = [];

        if (empty($_POST['name'])) {
            $errors['name'] = 'Name is required';
        }
    
        if (empty($_POST['email'])) {
            $errors['email'] = 'Email is required';
        }
    
        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Phone Number is required';
        }
    
        if (empty($_POST['password'])) {
            $errors['password'] = 'Password is required';
        }
    
        if (empty($_POST['password-confirm'])) {
            $errors['password-confirm'] = 'Password Confirmation is required';
        }
    
        if (!empty($_POST['password']) && !empty($_POST['password-confirm'])) {
            if (($_POST['password'] != $_POST['password-confirm'])) {
                $errors['password-confirm'] = 'Password and Password Confirmation don\'t match';
            }
        }
    
        if (empty($_POST['gender'])) {
            $errors['gender'] = 'Gender is required';
        }
    
        if (empty($_POST['courses'])) {
            $errors['courses'] = 'You must choose at least one course';
        }
    
        if (empty($_POST['level'])) {
            $errors['level'] = 'Level is required';
        }
        
        if (count($errors) == 0) {
            echo "Registration Complete";
        }

    }

?>

<html>
    <body>
        <form method="POST">
            <label>Name</label>
            <input name="name">
            <span style="color: red"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
            <br>
            <br>
            <label>Email</label>
            <input name="email" type="email">
            <span style="color: red"><?= isset($errors['email']) ? $errors['email'] : '' ?></span>
            <br>
            <br>
            <label>Phone Number</label>
            <input name="phone">
            <span style="color: red"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
            <br>
            <br>
            <label>Password</label>
            <input name="password" type="password">
            <span style="color: red"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
            <br>
            <br>
            <label>Password Confirmation</label>
            <input name="password-confirm" type="password">
            <span style="color: red"><?= isset($errors['password-confirm']) ? $errors['password-confirm'] : '' ?></span>
            <br>
            <br>
            <label>Gender</label>
            <input type="radio" name="gender" value="male">
            <label>Male</label>
            <input type="radio" name="gender" value="female"> 
            <label>Female</label>
            <span style="color: red"><?= isset($errors['gender']) ? $errors['gender'] : '' ?></span>

            <br>
            <br>
            <label>Course</label>
            <input type="checkbox" name="courses[]" value="Front End">
            <label>Front End</label>
            <input type="checkbox" name="courses[]" value="Back End">
            <label>Back End</label>
            <span style="color: red"><?= isset($errors['courses']) ? $errors['courses'] : '' ?></span>

            <br>
            <br>
            <label>Level</label>
            <select name="level">
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
            <span style="color: red"><?= isset($errors['level']) ? $errors['level'] : '' ?></span>

            <br>
            <br>

            <button type="submit">Register</button>
        </form>

    </body>
</html>