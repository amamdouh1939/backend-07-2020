<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="form-submit.php" method="POST">
            <label for="first-name">First Name</label>
            <input type="text" name="first_name">
            <label for="last-name">Last Name</label>
            <input name="last_name">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>