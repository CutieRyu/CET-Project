<?php
// functions.php

// Include your database connection configuration
include 'db_config.php';

// Helper function to check if a user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Helper function to check if a user is a teacher
function isUserTeacher() {
    return isLoggedIn() && isset($_SESSION['role']) && $_SESSION['role'] == 1;
}

// Helper function to check if a user is a student
function isUserStudent() {
    return isLoggedIn() && isset($_SESSION['role']) && $_SESSION['role'] == 2;
}

// Helper function to validate login credentials and retrieve user data
function validateLogin($usernameOrEmail, $password) {
    global $conn; // Use the database connection from db_config.php

    $sql = "SELECT id, role FROM public_user WHERE (username = '$usernameOrEmail' OR email = '$usernameOrEmail') AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Return user data if login is successful
        return $result->fetch_assoc();
    } else {
        // Return false if login fails
        return false;
    }
}

function validateTeacherLogin($usernameOrEmail, $password) {
    global $conn; // Use the database connection from db_config.php

    $sql = "SELECT id, role FROM public_user WHERE (username = '$usernameOrEmail' OR email = '$usernameOrEmail', 'role' = $role) AND password = '$password'";

    $result = $conn->query($sql);

    if ($result-> num_rows == 1 and $role == 1) {
        // Return user data if login is successful
        return $result->fetch_assoc();
    } else {
        // Return false if login fails
        return false;
    }
}

function validateAdminLogin($usernameOrEmail, $password) {
    global $conn;

    $sql = "SELECT id FROM admins WHERE (username = '$usernameOrEmail' OR email = '$usernameOrEmail') AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Return admin data if login is successful
        return $result->fetch_assoc();
    } else {
        // Return false if login fails
        return false;
    }
}
?>