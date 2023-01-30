

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>DIGILABS - Code Projects</title>
  <link rel="stylesheet" href="a.css">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">

     <style>
body{
    background-color: black;
}

.codeProjects{
    width: 100%;
    height: 1000px;
}
.codeProjectsName{
        border:3px solid none;
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
.codeProjectsName p{
           color:magenta;
     font-size: 30px;
     font-weight: bold;
     font-family: red hat mono, cursive;
     letter-spacing: 1px;
}
.studentsPhotos{
    border: 3px solid none;
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    

}
.studentsPhotos1{
min-width: 30%;
height: 400px;

   display: flex;
    justify-content:center;
    align-items: center;
}
.studentsPhotos1 img{
    border: 4px solid magenta;
    border-radius: 20px;
    width: 90%;
    height: 90%;
    
}
@media screen and (max-width:400px) {
    
    .studentsPhotos1{

height: 300px;

}

}

     </style>
     </head>
     <body>
 <?php
    include("../parts/navbar.php")
    ?>
      <div class="codeProjects">

        <div class="codeProjectsName">
          <p>.codeProjects()</p>
        </div>
        <div class="studentsPhotos">

          <div class="studentsPhotos1">
            <img src="../images/logo1.png" alt="">
          </div>

            <div class="studentsPhotos1">
            <img src="../images/logo1.png" alt="">
          </div>

            <div class="studentsPhotos1">
            <img src="../images/logo1.png" alt="">
          </div>

          <div class="studentsPhotos1">
            <img src="../images/logo1.png" alt="">
          </div>
          

        </div>
        
      </div>
      
     </body>

</html>
