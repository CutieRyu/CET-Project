<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
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
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>lessons</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">our lessons</h1>

   <div class="box-container">
 
      <div class="box">
         <div class="tutor">
            <img src="images/pic-1.jpg" alt="">
            <div class="info">
             
               
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.jpg  " alt="">
            <span>2 videos</span>
         </div>
         <h3 class="title">Baybayin Tutorial #1</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-1.jpg" alt="">
            <div class="info">
              
              
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.jpg" alt="">
            <span>2 videos</span>
         </div>
         <h3 class="title">Baybayin Tutorial #2 </h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>
      <div class="box">
   <div class="tutor">
      <img src="images/tutor-1.jpg" alt="Tutor 1">
      <div class="info">
         <h4>Tutor Name 1</h4>
         <p>Expert in Baybayin</p>
      </div>
   </div>
   <div class="thumb">
      <img src="images/thumb-5.jpg" alt="Thumbnail 5">
      <span>2 videos</span>
   </div>
   <h3 class="title">Baybayin Tutorial #3</h3>
   <a href="playlist.html" class="inline-btn">view playlist</a>
</div>

<div class="box">
   <div class="tutor">
      <img src="images/tutor-2.jpg" alt="Tutor 2">
      <div class="info">
         <h4>Tutor Name 2</h4>
         <p>Passionate about Baybayin</p>
      </div>
   </div>
   <div class="thumb">
      <img src="images/thumb-6.jpg" alt="Thumbnail 6">
      <span>2 videos</span>
   </div>
   <h3 class="title">Baybayin Tutorial #4</h3>
   <a href="playlist.html" class="inline-btn">view playlist</a>
</div>

<div class="box">
   <div class="tutor">
      <img src="images/tutor-3.jpg" alt="Tutor 3">
      <div class="info">
         <h4>Tutor Name 3</h4>
         <p>Experienced in Baybayin art</p>
      </div>
   </div>
   <div class="thumb">
      <img src="images/thumb-7.jpg" alt="Thumbnail 7">
      <span>2 videos</span>
   </div>
   <h3 class="title">Baybayin Tutorial #5</h3>
   <a href="playlist.html" class="inline-btn">view playlist</a>
</div>
     
</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>