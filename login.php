<?php
// login.php

include 'db_config.php'; // Include your database connection configuration
include 'functions.php'; // Include your helper functions

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform input validation
    $usernameOrEmail = htmlspecialchars($_POST['user_or_email']);
    $password = htmlspecialchars($_POST['password']);

    // Validate the credentials based on user role
    $userData = validateLogin($usernameOrEmail, $password);
    $adminData = validateAdminLogin($usernameOrEmail, $password);

    if ($userData) {
        // Successful login for a regular user, redirect to the user's dashboard or home page
        header("Location: dashboard.php");
        exit();
    } elseif ($adminData) {
        // Successful login for an admin, redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: login.php?error=true");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform input validation
    $usernameOrEmail = htmlspecialchars($_POST['user_or_email']);
    $password = htmlspecialchars($_POST['password']);

    // Validate the credentials based on user role
    $userData = validateLogin($usernameOrEmail, $password);
    $teacherData = validateTeacherLogin($usernameOrEmail, $password);

    if ($userData) {
        // Successful login for a regular user, redirect to the user's dashboard or home page
        header("Location: dashboard.php");
        exit();
    } elseif ($teacherData) {
        // Successful login for an admin, redirect to the admin dashboard
        header("Location: teacher_dashboard.php");
        exit();
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: login.php?error=true");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform input validation
    $usernameOrEmail = htmlspecialchars($_POST['user_or_email']);
    $password = htmlspecialchars($_POST['password']);

    // Validate the credentials based on user role
    $userData = validateLogin($usernameOrEmail, $password);
    $adminData = validateAdminLogin($usernameOrEmail, $password);

    if ($userData) {
        // Successful login for a regular user, redirect to the user's dashboard or home page
        header("Location: dashboard.php");
        exit();
    } elseif ($adminData) {
        // Successful login for an admin, redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: login.php?error=true");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('../images/baybg.jpg');
            background-size: cover;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.3); /* Adjust the alpha value for transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px); /* Adjust the blur intensity as needed */
        }

        .input-container {
            margin-bottom: 15px;
        }

        .error-message {
            color: red;
        }

        .register-link {
            margin-top: 15px;
        }
    </style>
    <title>Login - Baybytes</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-container">
                <label for="user_or_email">Username or Email:</label>
                <input type="text" id="user_or_email" name="user_or_email" required>
            </div>
            <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <?php
            // Check if there's a login error message from the server
            if (isset($_GET['error'])) {
                echo '<p class="error-message">Invalid username, email, or password</p>';
            }
        ?>
        <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>