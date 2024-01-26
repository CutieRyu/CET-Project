<?php
// register.php

include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform input validation
    $newUsername = htmlspecialchars($_POST['new-username']);
    $newEmail = htmlspecialchars($_POST['new-email']);
    $newPassword = htmlspecialchars($_POST['new-password']);
    $role = (int)$_POST['role'];  // Assuming the role is provided as a POST parameter

    // Insert user data into the database
    $sql = "INSERT INTO public_user (username, email, password, role) VALUES ('$newUsername', '$newEmail', '$newPassword', $role)";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, show alert and redirect to login page
        echo '<script>alert("Registration successful. You can now login.");</script>';
        header("Location: login.php");
        exit();
    } else {
        // Registration failed, redirect to an error page or display an error message
        header("Location: register.php?error");
        exit();
    }
}

// Close the database connection
$conn->close();
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

        .register-container {
            background-color: rgba(255, 255, 255, 0.3); /* Adjust the alpha value for transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px); /* Adjust the blur intensity as needed */
        }

        .input-container {
            margin-bottom: 15px;
        }

        .dropdown-container {
            margin-bottom: 15px;
        }

        .dropdown-container label {
            display: block;
            margin-bottom: 5px;
        }

        .dropdown-container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
        }

        .register-link {
            margin-top: 15px;
        }
    </style>
    <title>Register - Baybytes</title>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="input-container">
                <label for="new-username">Username:</label>
                <input type="text" id="new-username" name="new-username" required>
            </div>
            <div class="input-container">
                <label for="new-email">Email:</label>
                <input type="email" id="new-email" name="new-email" required>
            </div>
            <div class="input-container">
                <label for="new-password">Password:</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
            <div class="dropdown-container">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="0">Normal User</option>
                    <option value="1">Teacher</option>
                    <option value="2">Student</option>
                    <option value="3">Admin</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>