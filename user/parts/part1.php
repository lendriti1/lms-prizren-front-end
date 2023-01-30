<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="a.css">
  <title></title>
  <style media="screen">
body{
    margin:0px 0px 0px 0px;
}
      .MainPhoto{
        
        border: 5px solid none;
        width: 100%;
        height: 650px;
        display: flex;
        flex-direction: row;
        background-image: url("../parts/images/banner.png");
        background-size:cover;
        background-repeat: no-repeat;
      }
     
  .pjesa1Photo{
   padding-top: 30px;
    border: 5px solid none;
    width: 45%;
    height: 100%;
    display: flex;
margin-left: 100px;
    flex-direction: column;
    justify-content: center;
  }
  .pjesa2Photo{
      padding-top: 30px;    

    border: 5px solid none;
    width: 65%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;

  }

  .pjesa2Photo img{
    width: 70%;
      height: 100%;

  }
  .startCoding{
    border: 5px solid none;
    width: 90%;
      height: 30%;
      color:white;
      font-size: 55px;
      font-family: red hat mono;
  }
  .loginSignup{
    border: 5px solid none;
    width:90%;
      height: 10%;
      display: flex;
      flex-direction:row;
      margin-left: 0px;
      padding-left: 0px;

  }
  .LoginButton{
    border: 5px solid none;
    width:30%;
      height: 100%;
      display: flex;
      align-items: center;
  }
  .SignUpButton{
    border: 5px solid none;
    width:55%;
      height: 100%;
      display: flex;
      align-items: center;



  }
  .SignUpButton1{
  height: 80%;
  width: 60%;

  background: black;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 20px;

  }
  .pLogin{
   
  color:white;
  font-size:30px;
  font-weight:bold;
  padding-left: 20px;
  margin-bottom: 0px;
  }
  .sLogin{
  
    width: 100%;
    display: flex;
    justify-content: center;
    align-items:center;
      margin-bottom: 0px;

  border-radius: 20px;
  color: white;
  font-size:30px;

  }
  @media screen and (max-width:1000px) {
  .MainPhoto{
    display: flex;
      flex-direction: column;
      height: 800px;
  }
  .pjesa1Photo{
    width: 100%;
    height: 40%;
margin-left: 0px;
   
  }
  .startCoding{
    height:100%;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
  }
  .startCoding p {
    font-size: 45px;
  }
  .pLogin{
  color:white;
  font-size:30px;
  font-weight:bold;
  padding-left: 20px;
 padding-bottom: 10px;
  
  }
    .sLogin{
      padding-left: 0px;
      padding-bottom: 10px;
     font-size:30px;

     
  }
  .loginSignup{
    height: 100%;
    width: 90%;
  }
  .LoginButton{
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: center;

  }
 

  .SignUpButton{
      margin-left: 0px;
    width: 50%;
    display: flex;
    justify-content: center;

  }
  .SignUpButton1{
      margin-left: 0px;
    width: 90%;
    height: 40%;
    display: flex;
    align-items: center;
  }
  .pjesa2Photo{

  width: 100%;
      height:50%;
      display: flex;
      align-items: center;
  }
    .pjesa2Photo img{
    width: 100%;
      height:  120%;

  }
  


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
@media screen and (max-width:450px) {
 .startCoding p {
    font-size: 35px;
  }
}
  @media screen and (min-width:990px) and (max-width:1300px) {
    .txtAnimation{
      font-size: 40px;
    }
    
  }
  /* fix

   */

  </style>
</head>

<body>
    
  <div class="MainPhoto">

    <div class="pjesa1Photo">
        <!-- color:white;text-shadow: 0px 3px 10px rgba(0,0,0,0.5) -->
      <div class="startCoding">
        <p class="txtAnimation" style=""style="
        ">.start() coding with Digital School</p>
      </div>
      <div class="loginSignup">
        <a href="../pages/login.php" class='LoginButton' style="text-decoration:none">
        <div class="LoginButton"  >
          <p class="pLogin" style="color:white;text-shadow: 0px 3px 10px rgba(0,0,0,0.7);">.login()</p>
        </div>
        </a>
        <div class="SignUpButton">
             <a href="../pages/login.php" class='sLogin' style="text-decoration:none">
          <div class="SignUpButton1">


            <p class="sLogin" style="color:white;text-shadow: 0px 1px 5px white"> .signUp()</p>
          </div>
           </a>
        </div>
      </div>
    </div>
    <div class="pjesa2Photo">
      <img src="../parts/images/telBanner.png">
    </div>
  </div>
</body>

</html>
