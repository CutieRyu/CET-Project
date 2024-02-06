<?php
session_start();
include 'db_config.php'; // Include your database connection configuration
include 'functions.php'; // Include your helper functions

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform input validation
    $usernameOrEmail = htmlspecialchars($_POST['user_or_email']);
    $password = htmlspecialchars($_POST['password']);

    // Validate the credentials
    $userData = validateLogin($usernameOrEmail, $password);

    if ($userData) {
        // Successful login, redirect based on user role
        $userRole = $userData['role'];
        echo "User Role: " . $userRole; // Add this line for debugging
    
        if ($userRole == 1) {
            // Teacher
            header("Location: teacher_dashboard.php");
            exit();
        } elseif ($userRole == 3) {
            // Admin
            header("Location: admin_dashboard.php");
            exit();
        } elseif ($userRole == 2) {
            // Student
            header("Location: student_dashboard.php");
            exit();
        } elseif ($userRole == 4) {
            // Regular User
            header("Location: dashboard.php");
            exit();
        } else {
            // Redirect to a default page if the role is undefined
            echo "Undefined role: " . $userRole;
            header("Location: index.php");
            exit();
        }
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: index.php?error=true");
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
            background-color: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .input-container {
            margin-bottom: 15px;
        }

        .password-input-container {
            display: flex;
            align-items: center;
        }

        #password {
            flex: 2; /* Increased width for better visibility */
            margin-right: 10px;
            padding: 5px; /* Added padding for better appearance */
        }

        #showPasswordBtn {
            width: 30px; /* Adjusted width for 1:1 ratio */
            height: 30px; /* Adjusted height for 1:1 ratio */
            background-color: #333;
            color: #ffbd59;
            padding: 1px 1px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #showPasswordBtn:hover {
            background-color: #555;
        }

        .error-message {
            color: red;
        }

        .register-link {
            margin-top: 15px;
        }

        button {
            background-color: #333;
            color: #ffbd59;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
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
                <div class="password-input-container">
                    <input type="password" id="password" name="password" required>
                    <button type="button" id="showPasswordBtn" onclick="togglePasswordVisibility()">Show</button>
                </div>
            </div>
            <button type="submit">Login</button>
        </form>
        <?php
        // Check if there's a login error message from the server
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'user_not_found') {
                echo '<p class="error-message">User does not exist</p>';
            } else {
                echo '<p class="error-message">Invalid username, email, or password</p>';
            }
        }
        ?>
        <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var showPasswordBtn = document.getElementById("showPasswordBtn");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordBtn.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                showPasswordBtn.textContent = "Show";
            }
        }
    </script>
</body>
</html> 