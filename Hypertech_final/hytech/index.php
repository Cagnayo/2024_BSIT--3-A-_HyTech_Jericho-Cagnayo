<?php 
    include "conn.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="index.php" method="post">
    <h2>Log in Form</h2>
    <label for="uname">Username:</label>
    <input type="text" id="uname" name="uname" required><br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" required><br><br>
    <input type="submit" value="Login"><br>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>

