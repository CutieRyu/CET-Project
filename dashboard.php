<?php
session_start();
include 'db_config.php';

$user_id = $_SESSION['id']; // Update this accordingly

$sql = "SELECT username, role FROM public_user WHERE id = $id"; // Update the table name and column names accordingly
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Handle the case when no user is found
    $user = array('username' => 'Guest', 'role' => 4); // Default values or handle accordingly
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard - Baybytes</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   </style>

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="dashboard.php" class="logo">Educate</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search lessons..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php echo $user['username']; ?></h3>
         <p class="role"><?php echo getRoleText($user['role']); ?></p>
         <a href="profile.html" class="btn">view profile</a>
         <a href="logout.php" class="btn">log out</a>
      </div>

      <?php
      // Function to convert role code to text
      function getRoleText($roleCode)
      {
         switch ($roleCode) {
            case 4:
                  return 'Normal User';
            case 1:
                  return 'Teacher';
            case 2:
                  return 'Student';
            case 3:
                  return 'Admin';
            default:
                  return 'Unknown Role';
         }
      }
      ?>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
   <?php
      if (isset($user) && is_array($user)) {
         // Check if $user is set and is an array
   ?>
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $user['username']; ?></h3>
      <p class="role"><?php echo getRoleText($user['role']); ?></p>
      <a href="profile.html" class="btn">view profile</a>
   <?php
      } else {
         // Default content or error handling if $user is not set or not an array
   ?>
      <p>No user information available</p>
   <?php
      }
   ?>
   </div>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="lessons.php"><i class="fas fa-graduation-cap"></i><span>lessons</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>


<section class="home-grid">

   <h1 class="heading"> Quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">categories</h3>
         <div class="flex">
            <a href="about-baybayin.php"><span>Baybayin</span></a>
            <a href="#"><span>Sambal </span></a>
            <a href="#"><span>Kur-itan</span></a>
            <a href="#"><span>Pangasinan </span></a>
            <a href="#"><span>Badlit</span></a>
            <a href="#"><span>Kapampangan </span></a>
            <a href="#"><span>Ibalnan script </span></a>
            <a href="#"><span>Hanunó'o script </span></a>
           
         </div>
      </div>

      <div class="box">
         <h3 class="title">Lessons 1 - 5</h3>
         <div class="flex">
            <a href="lesson1.php"><span>Lesson 1</span></a>
            <a href="#"><span>Lesson 2</span></a>
            <a href="#"><span>Lesson 3</span></a>
            <a href="#"><span>Lesson 4</span></a>
            <a href="#"><span>Lesson 5</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">become a tutor</h3>
 
         <a href="teachers.html" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">our lessons</h1>

   <div class="more-btn">
      <a href="lessons.html" class="inline-option-btn">view all course</a>
   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>