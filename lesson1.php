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
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">User</h3>
      <p class="role"><?php echo getRoleText($user['role']); ?></p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="lessons.php"><i class="fas fa-graduation-cap"></i><span>lessons</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>


<div class="card-container">
   <div class="content-container">
      <div class="page active" id="page1">
         <h2>What is Baybayin?</h2>
         <p>Baybayin is an ancient philippine script that is </p>
         <button class="navigation-btn" onclick="nextPage()">Next</button>
      </div>

      <div class="page" id="page2">
         <h2>Page 2</h2>
         <p>This is the content of Page 2. You can navigate to the previous or next page using the buttons below.</p>
         <button class="navigation-btn" onclick="prevPage()">Previous</button>
         <button class="navigation-btn" onclick="nextPage()">Next</button>
      </div>

      <div class="page" id="page3">
         <h2>Page 3</h2>
         <p>This is the content of Page 3. You can navigate to the previous page using the button below.</p>
         <button class="navigation-btn" onclick="prevPage()">Previous</button>
      </div>
   </div>
</div>

<script>
   let currentPage = 1;

   function showPage(pageNumber) {
      document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));
      document.getElementById(`page${pageNumber}`).classList.add('active');
      currentPage = pageNumber;
   }

   function nextPage() {
      if (currentPage < 19) {
         showPage(currentPage + 1);
      }
   }

   function prevPage() {
      if (currentPage > 1) {
         showPage(currentPage - 1);
      }
   }
</script>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>