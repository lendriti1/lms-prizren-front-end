<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adminNav</title>
      <link rel="stylesheet" href="../css/navBarAdmin.css">
      <script src="https://cdn.tailwindcss.com"></script>
      <style>

        .btn1{
  width: 120px;
  height: 40px;
  background:pink;
  border-radius: 20px;
  font-size:18px;
  font-weight: bold;
  margin-top: 5px;
}
.icon1{
  border:5px solid none;
   height:50px;
  width: 350px;
  display: flex;
  justify-content: left;
  align-items: center;

}
.icon1 img{
  border:5px solid none;
   height:80px;
 width: 90px;
  display: flex;
  justify-content: left;
  padding-top: 10px;


}

.icon2{
  border:5px solid none;
   height:80px;
  width: 50px;
  display: flex;
  position:relative;
  justify-content: left;
  align-items: center;
  border-radius: 40px;

}
.icon2 img{
  border:5px solid none;
  height:50px;
 width: 50px;

  display: flex;
  justify-content: left;

}

.icon3{
   height:40px;
  width: 40px;
  display: flex;
  position:relative;
  justify-content: left;
  align-items: center;
  border-radius: 40px;
  margin-top: 10px;

}
.icon3 img{
  border:5px solid none;
  height:40px;
 width: 10px;

  display: flex;
  justify-content: left;

}
/* .hello123{
 
  background:url('../parts/a.png');
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: contain;
} */

      </style>
  </head>
  <body>
    <section class="nav-bar">



      <nav class="relative px-4 py-1 flex justify-between items-center bg-black hello123" style="height:80px;width:100%;">
        <a class="text-3xl font-bold leading-none" href="#">
          <div class="icon1">


            <img src="../parts  /logo1.png">
            <div class="">
              <p style="color:magenta;padding-left:10px;font-family:red hat mono,cursive;letter-spacing:1px">DIGILABS</p>
            </div>
          </div>
        </a>
        <div class="lg:hidden">
          <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Mobile menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
        <ul class="hidden relative top-1/2 left-1/3 transform -translate-y-1/2
        -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6  mb-8 mt-10">
          <li><a class="text-2xl text-violet-400  " href="../pages/Dashboard.php">.home()</a></li>
          <li><a class="text-2xl text-white " href="Courses.html">.courses()</a></li>
          <li><a class="text-2xl text-white" href="Attendance.html">.attendance()</a></li>
          <li><a class="text-2xl text-white" href="Settings.html">.settings()</a></li>
          <li><a class="text-2xl text-white" href="LogIn.html">____________</a></li>
          <li>
            <div class="icon2">


<img src="../images/user.png" alt=""   class="icon2">
          </li>
          
          </div>
         
        </ul>
      </nav>
      <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-black border-r overflow-y-auto">
          <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
            </a>
            <button class="navbar-close">
              <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <div>
            <ul>
              <li class="mb-1">
                <a class="block p-4 text-2xl font-semibold text-violet-400  " href="../pages/home.php">.home()</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-2xl font-semibold text-violet-400  " href="../pages/ourteam.php">.ourTeam()</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-2xl font-semibold text-violet-400  " href="../pages/projects.php">.projects()</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-2xl font-semibold text-violet-400  " href="../pages/login.php">.login()</a>
              </li>
              <li class="mb-1">
                <a class="block p-4 text-2xl font-semibold text-violet-400  " href="../pages/signup.php">.signUp()</a>
              </li>
            </ul>
          </div>
          <div class="mt-auto">
            <div class="pt-6">
              <a class="block px-4 py-3 mb-3 leading-loose text-xl text-center font-semibold leading-none
    bg-violet-600 text-white rounded-xl" href="LogIn.html">Log in</a>
              <a class="block px-4 py-3 mb-2 leading-loose text-xl
                 text-center  text-white font-semibold   bg-violet-600 hover:bg-blue-700  rounded-xl" href="SignUp.html">Sign Up</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
              <span>Made by DigiLabs</span>
            </p>
          </div>
        </nav>
      </div>


      <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
          // open
          const burger = document.querySelectorAll('.navbar-burger');
          const menu = document.querySelectorAll('.navbar-menu');

          if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
              burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                }
              });
            }
          }

          // close
          const close = document.querySelectorAll('.navbar-close');
          const backdrop = document.querySelectorAll('.navbar-backdrop');

          if (close.length) {
            for (var i = 0; i < close.length; i++) {
              close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                }
              });
            }
          }

          if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
              backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                  menu[j].classList.toggle('hidden');
                }
              });
            }
          }
        });
      </script>
    </section>

   
  </body>
</html>
