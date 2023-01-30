<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Projekti</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
<style>
  .icon1{
  border:5px solid none;
   height:50px;
  display: flex;
  justify-content: left;
  align-items: center;

}
.icon1 img{
  border:5px solid none;
   height:90px;

  display: flex;
  justify-content: left;


}

.btn1{
  width: 120px;
  height: 40px;
  background:pink;
  border-radius: 20px;
  font-size:18px;
  font-weight: bold;
  margin-top: 5px;
}
.home{
  border:5px solid red;
  width: 100%;
  height: 800px;
}
  .txtAnimation{
   
  font-weight: bold;
  background: repeating-linear-gradient(-45deg, black 0%, magenta 10%, purple 20%,
              blue 30%, cyan 40%,  red 50%, black 60%, blue 70%,purple 75%, orange 80%, magenta 90%,black 100%);
  background-size: 600vw 600vw;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  animation: slide 7s linear infinite forwards;

  }
  @keyframes slide {
  0%{
    background-position-x: 0%;
  }
  100%{
    background-position-x: 600vw;
  }
}


</style>
</head>

<body>
  <section class="nav-bar">


    <nav class="relative flex justify-between items-center bg-black abc123 " style="height:80px">
      <a class="text-3xl font-bold leading-none" href="#" style="text-decoration:none">
        <div class="icon1">


          <img src="../images/logo1.png">
          <div>
            <p style="color:white;margin-bottom:0px;margin-top:10px;text-decoration:none;letter-spacing:5px;
            font-family:red hat mono,cursive">DIGILABS</p>
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
      -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6  mb-8">
        <li><a class="text-2xl "  href="../pages/home1.php" style="text-decoration:none;font-family: 'Racing Sans One', cursive;
        color:white">.home()</a></li>
        <li><a class="text-2xl  a" href="../pages/Ourteam.php" style="text-decoration:none;font-family: 'Racing Sans One', cursive;
         color:white;">.ourTeam()</a></li>
           <li><a class="text-2xl  b" href="../pages/AboutUs.php" style="text-decoration:none;font-family: 'Racing Sans One', cursive;
         color:white;">.aboutUs()</a></li>
           <li><a class="text-2xl  c" href="../pages/projects.php" style="text-decoration:none;font-family: 'Racing Sans One', cursive;
         color:white;">.projects()</a></li>
           <li><a class="text-2xl  d" href="../pages/login.php" style="text-decoration:none;font-family: 'Racing Sans One', cursive;
         color:white;">.login()</a></li>
       
        <li>
          <a href="../pages/signUp.php">

       
          <button type="button" name="button" class="btn1" style="background:magenta;color:white;
          font-size:20px;font-weight:bold;font-family: 'Racing Sans One', cursive;">
            Sign Up</button>
               </a>
        </li>
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
              <a class="block p-4 text-4xl font-semibold " href="../pages/home1.php" "  style="text-decoration:none;font-family: 'Racing Sans One', cursive;
           color:white;font-size:25px;cursor:pointer;color:magenta">.home()</a>
            </li>
            <li class="mb-1">
             <a class="block p-4 text-4xl font-semibold   "href="../pages/Ourteam.php" "  style="text-decoration:none;font-family: 'Racing Sans One', cursive;
         color:white;font-size:25px">.Ourteam()</a>
            </li>
            <li class="mb-1">
             <a class="block p-4 text-4xl font-semibold   " href="../pages/AboutUs.php"  "  style="text-decoration:none;font-family: 'Racing Sans One', cursive;
          color:white;font-size:25px">.aboutUs()</a>
            </li>
            <li class="mb-1">
              <a class="block p-4 text-4xl font-semibold  " href="../pages/projects.php"  "  style="text-decoration:none;font-family: 'Racing Sans One', cursive;
           color:white;font-size:25px">.Projects()</a>
            </li>
          
          </ul>
        </div>
        <div class="mt-4">
          <div class="">
            <a class="block px-4 py-3 mb-3 leading-loose text-xl text-center font-semibold leading-none
  bg-violet-600 text-white rounded-xl" href="../pages/login.php" style="background-color: #FF00FF;
              color:white; font-family: 'Racing Sans One', cursive;text-decoration:none">Log in</a>
            <a class="block px-4 py-3 mb-2 leading-loose text-xl
               text-center  text-white font-semibold    hover:bg-blue-700  rounded-xl"  href="../pages/signUp.php" style="background-color: #FF00FF;
              color:white; font-family: 'Racing Sans One', cursive;text-decoration:none">Sign Up</a>
          </div>
          <p class="  text-4xl text-center text-gray-400" style="margin-top:20%; font-family:red hat mono,cursive">
            <span class="txtAnimation">Made by DigiLabs</span>
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

  </body>

  </html>
