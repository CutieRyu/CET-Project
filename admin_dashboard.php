<?php
// admin_dashboard.php

// Include necessary files and functions
include 'db_config.php'; // Include your database connection configuration
include 'functions.php'; // Include your helper functions

// Check user authentication and role
if (!isLoggedIn() || !isUserAdmin()) {
    header("Location: admin_dashboard.php");
    exit();
}

// Retrieve admin data
$adminData = getAdminData($_SESSION['username']); // Implement this function to fetch admin data
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Admin Dashboard</title>

   <!-- Additional styles specific to the admin dashboard -->
   <style>
      /* Add your admin dashboard-specific styles here */
      body {
         background-color: #f5f5f5;
      }

      .admin-header {
         background-color: #333;
         color: #fff;
         padding: 1rem;
         text-align: center;
      }

      .admin-profile {
         margin-top: 2rem;
         padding: 1rem;
         background-color: #fff;
         border-radius: 0.5rem;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .admin-profile img {
         width: 100px;
         border-radius: 50%;
      }

      .admin-profile h2 {
         margin-top: 1rem;
         color: #333;
      }

      /* Add more styles based on your specific design */
   </style>
</head>
<body>

<header class="admin-header">
   <h1>Welcome to Admin Dashboard</h1>
</header>

<div class="admin-profile">
   <img src="<?php echo $adminData['profile_picture']; ?>" alt="Profile Picture">
   <h2><?php echo $adminData['full_name']; ?></h2>
   <p>Role: Admin</p>
</div>

<!-- Add more sections and content specific to the admin dashboard -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>