<?php 

@include 'connection.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $select = "SELECT * FROM users WHERE username = '$username' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    }else{
        if($pass != $cpass){
            $error[] = 'Passwords do not match!';
        }else{
            // Insert into customer table
            $insert_customer = "INSERT INTO customer(username, first_name, last_name, email, password, date_added) VALUES('$username', '$fname', '$lname', '$email', '$pass', NOW())";
            mysqli_query($conn, $insert_customer);

            // Insert into users table
            $insert_user = "INSERT INTO users(username, password, roles, date_added) VALUES('$username', '$pass', 'U', NOW())";
            mysqli_query($conn, $insert_user);

            header('location: login.php');
            exit();
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
            <div class="featured-image mb-3">
                <img src="images/1.png" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
        </div> 
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-3">
                    <h2>Hello</h2>
                    <p>Kindly fill up the following to register.</p>
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="firstname">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last Name" name="lastname">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Password" name="cpassword">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6" name="submit">Sign Up</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign Up with Google</small></button>
                    </div>
                    <div class="row">
                        <small>Already have account? <a href="login.php">Log in</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
