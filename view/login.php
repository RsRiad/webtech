<?php include '../control/login_control.php' ?>

<!DOCTYPE html>

<head>
    <title>Login Form</title>
</head>

<body>
    <h2>Login</h2>
    <form action="../control/login_control.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>