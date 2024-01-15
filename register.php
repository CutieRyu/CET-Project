<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baybytes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, email, and password from the form
    $newUsername = $_POST["new-username"];
    $newEmail = $_POST["new-email"];
    $newPassword = $_POST["new-password"];

    // Perform registration logic
    $sql = "INSERT INTO public_user (username, email, password) VALUES ('$newUsername', '$newEmail', '$newPassword')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to a success page
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
            <button type="submit">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>