<html>
    <head>
<link rel="stylesheet" href="a.css">
<style>
    .part2{
    border: 5px solid none;
    width: 100%;
    height: 700px;
    background-image: url("../parts/images/fotoja3.png");
    background-attachment: fixed;
    background-size:cover;
}
.pp1{
border: 5px solid none;
    width: 50%;
    height: 80%;
    display: flex;
    align-items:flex-end;
}
.pp2{
    border: 5px solid none;
    width: 100%;
    height: 30%;  
}
.pp2 p {
   font-size: 55px;
   color: white;
   padding-left: 20px;
    padding-right: 20px;

    
}
@media screen and (max-width:500px){
    .part2{
        background-color: black;
       background-image: url();
     height: 150px;
}
.pp1{

    width: 100%;
    height: 20%;

}
.pp2{

}
.pp2 p {
    color: red;;
  font-size: 30px;
  text-align: center;
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

</style>
    </head>
    <body>
        <div class="part2">
            <div class="pp1">
                <div class="pp2">
                     <p class="txtAnimation" >.programming() for students 8-18 years</p>
                    <p></p>
                </div>
            </div>
        </div>
        
    </body>
</html>