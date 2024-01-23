<?php
// teacher_dashboard.php

include 'db_config.php'; // Include your database connection configuration
include 'functions.php'; // Include your helper functions

// Check user authentication and role
if (!isLoggedIn() || !isUserTeacher()) {
    header("Location: teacher_dashboard.php");
    exit();
}

// Retrieve teacher data
$teacherData = getTeacherData($_SESSION['username']); // Implement this function to fetch teacher data
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Teacher Dashboard</title>

   <!-- Additional styles specific to the teacher dashboard -->
   <style>
      /* Add your teacher dashboard-specific styles here */
      body {
         background-color: #f0f0f0;
      }

      .teacher-header {
         background-color: #3498db;
         color: #fff;
         padding: 1rem;
         text-align: center;
      }

      .teacher-profile {
         margin-top: 2rem;
         padding: 1rem;
         background-color: #fff;
         border-radius: 0.5rem;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .teacher-profile img {
         width: 100px;
         border-radius: 50%;
      }

      .teacher-profile h2 {
         margin-top: 1rem;
         color: #333;
      }

      /* Add more styles based on your specific design */
   </style>
</head>
<body>

<header class="teacher-header">
   <h1>Welcome to Teacher Dashboard</h1>
</header>

<div class="teacher-profile">
   <img src="<?php echo $teacherData['profile_picture']; ?>" alt="Profile Picture">
   <h2><?php echo $teacherData['full_name']; ?></h2>
   <p>Role: Teacher</p>
</div>

<!-- Add teacher-specific navigation and content -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>