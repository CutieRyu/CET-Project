<?php

include 'db_config.php';

// Helper function to validate login credentials and retrieve user data
function validateLogin($usernameOrEmail, $password) {
    global $conn; // Use the database connection from db_config.php

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, role FROM public_user WHERE (username = ? OR email = ?) AND password = ?");
    $stmt->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // Return user data if login is successful
        $stmt->bind_result($id, $role);
        $stmt->fetch();
        return ['id' => $id, 'role' => $role];
    } else {
        // Return false if login fails
        return false;
    }
    $stmt->close();
}
?>