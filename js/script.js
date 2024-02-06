let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
   toggleBtn.classList.replace('fa-sun', 'fa-moon');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   toggleBtn.classList.replace('fa-moon', 'fa-sun');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enableDarkMode();
}

toggleBtn.onclick = (e) =>{
   darkMode = localStorage.getItem('dark-mode');
   if(darkMode === 'disabled'){
      enableDarkMode();
   }else{
      disableDarkMode();
   }
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   search.classList.remove('active');
}

let search = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
   search.classList.toggle('active');
   profile.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function () {
   const menuBtn = document.getElementById('menu-btn');
   const closeBtn = document.getElementById('close-btn');
   const sideBar = document.querySelector('.side-bar');

   menuBtn.addEventListener('click', function () {
       sideBar.style.left = '0';
   });

   closeBtn.addEventListener('click', function () {
       sideBar.style.left = '-200px';
   });
});
// Function to open the video in a pop-up window
function openVideoPopup(url) {
   // Set the width and height according to your preferences
   var width = 800;
   var height = 600;

   // Calculate the position to center the window
   var leftPosition = (screen.width - width) / 2;
   var topPosition = (screen.height - height) / 2;

   // Open the video in a new window with specific dimensions and centered
   window.open(url, 'VideoPopUp', 'width=' + width + ', height=' + height + ', top=' + topPosition + ', left=' + leftPosition);
}

// Get the video link
var videoLink = document.getElementById("videoPopup");

// Add click event to open the pop-up window
videoLink.addEventListener("click", function (event) {
   event.preventDefault();
   var videoURL = this.getAttribute("https://www.youtube.com/watch?v=KuT_qfMOKgY&t=173s");
   openVideoPopup(videoURL);
});
