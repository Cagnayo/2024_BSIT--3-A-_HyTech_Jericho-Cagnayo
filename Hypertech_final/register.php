<?php 
    include "connection.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form action="register.php" method="post">
    <h2>Registration Form</h2>
    <label for="uname">Username:</label>
    <input type="text" id="uname" name="uname" required><br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="pass" required><br><br>
    <input type="submit" value="Create account"><br>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>



</body>
</html>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        
        $check_query = "SELECT * FROM users WHERE username='$username'";
        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo "username is already exist.";
        } else {
            // Insert user data into database
            $sql = "INSERT INTO users (username, password, roles) VALUES ('$username','$password','U')";
            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        
    
        // Close connection
        mysqli_close($conn);
    }
?>