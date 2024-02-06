<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Student Dashboard</title>

   <!-- Additional styles specific to the student dashboard -->
   <style>
      /* Add your student dashboard-specific styles here */
      body {
         background-color: #ecf0f1;
      }

      .student-header {
         background-color: #27ae60;
         color: #fff;
         padding: 1rem;
         text-align: center;
      }

      .student-profile {
         margin-top: 2rem;
         padding: 1rem;
         background-color: #fff;
         border-radius: 0.5rem;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .student-profile img {
         width: 100px;
         border-radius: 50%;
      }

      .student-profile h2 {
         margin-top: 1rem;
         color: #333;
      }

      /* Add more styles based on your specific design */
   </style>
</head>
<body>

<header class="student-header">
   <h1>Welcome to Student Dashboard</h1>
</header>

<div class="student-profile">
   <img src="<?php echo $studentData['profile_picture']; ?>" alt="Profile Picture">
   <h2><?php echo $studentData['full_name']; ?></h2>
   <p>Role: Student</p>
</div>

<!-- Add student-specific navigation and content -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>