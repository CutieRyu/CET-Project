<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      /* Add additional styles for the dashboard if needed */
      body {
         background-color: #f4f4f4; /* Adjust as needed */
      }

      /* Add any specific styles for the dashboard content */
      .dashboard-container {
         padding: 20px;
      }
   </style>

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="dashboard.php" class="logo">Educate</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
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
         <h3 class="name">User</h3>
         <p class="role">student</p>
         <a href="profile.php" class="btn">View Profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">User</h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>


<section class="home-grid">

   <h1 class="heading"> Quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p class="likes">total likes : <span>0</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">total comments : <span>0</span></p>
         <a href="#" class="inline-btn">view comments</a>
         <p class="likes">saved playlists : <span>0</span></p>
         <a href="#" class="inline-btn">view history</a>
      </div>

      <div class="box">
         <h3 class="title">categories</h3>
         <div class="flex">
            <a href="#"><i class=""></i><span>Baybayin</span></a>
            <a href="#"><i class=""></i><span>Sambal </span></a>
            <a href="#"><i class=""></i><span>Kur-itan</span></a>
            <a href="#"><i class=""></i><span>Pangasinan </span></a>
            <a href="#"><i class=""></i><span>Badlit</span></a>
            <a href="#"><i class=""></i><span>Kapampangan </span></a>
            <a href="#"><i class=""></i><span>Ibalnan script </span></a>
            <a href="#"><i class=""></i><span>Hanunó'o script </span></a>
           
         </div>
      </div>

      <div class="box">
         <h3 class="title">topics</h3>
         <div class="flex">
            <a href="#"><i class=""></i><span>Baybayin</span></a>
            <a href="#"><i class=""></i><span>Alibata</span></a>

         </div>
      </div>

      <div class="box">
         <h3 class="title">become a tutor</h3>
 
         <a href="teachers.html" class="inline-btn">get started</a>
      </div>

   </div>

</section>



<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="more-btn">
      <a href="courses.html" class="inline-option-btn">view all course</a>
   </div>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>