

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>  <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
  <meta charset="utf-8">
  <title>ADMIN</title>
  <link rel="stylesheet" href="../css/admin.css">
  <style>
    p{
      font-family: red hat mono,cursive;
    }
body{
  display: flex;
  align-items: center;
  background: black;
  flex-direction: column;

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

  display: flex;
  justify-content: left;


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

  .main{
    border: 10px solid none;
  width: 100%;

  height: 700px;
  display: flex;

  background: black;
}
.part1{
  border: 5px solid none;
  width: 60%;
  height: auto;
}


.name1{
  border: 5px solid none;
  width: 70%;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: left;



}
  .name1 p{
  font-size: 25px;
  font-weight: bold;
    color: white;
}
.course{
  border: 3px solid none;
  width: 100%;
  height: 230px;
}
.courses{
  border: 5px solid none;
  width: 85%;
}
.courseName12{
  display: none;

}
.course1{
  border: 5px solid none;
  width: 100%;
  height: 90%;
border-radius: 20px;
  background: white;
display: flex;
align-items: center;


}
.fotoja{
  border: 3px solid none;
  width: 30%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;

}
.fotoja img{
 
  width: 70%;
  height: 60%;

}
.info1{
  border: 3px solid none;
  width: 40%;
  height: 100%;
  display: flex;
  flex-direction: column;
margin-top: 50px;
}
.courseName{
  border: 3px solid none;
  width: 100%;
  height: 20%;
  font-size: 25px;
  font-weight: bold;
  display: flex;
  align-items: center;
  padding-top: 30px;
  box-sizing:border-box;
}
.TeacherName{
  border: 3px solid none;
  width: 100%;
  height: 30%;
    font-size: 20px;
  font-weight: bold;
  display: flex;

  padding-top: 20px;
box-sizing: border-box;}

.button1{
  width: 100%;
  height: 35%;
  border-radius: 20px;
  display: flex;
  align-items: center;


}

.enterButton{
 
  width: 70%;
  height:  60%;
  display: flex;
  align-items: center;
    border-radius: 20px;
    font-weight: bold;
    background: magenta;
      padding-left: 15px;
      font-size: 18px;
    color:white;
   
}
.more{
  border: 3px solid none;
  width: 80%;
  height:  100px;
  display: none;
justify-content: center;
align-items: center;
}
.buttonMore{
  border: 3px solid none;
  width: 50%;
  height:  50%;

}
.button2{
  border: 3px solid none;
  width: 100%;
  height:  100%;
  border-radius: 20px;
  color:white;
  background: lightpink;
  font-size: 30px;
  font-weight: bold;
}
.div1{
  border:3px solid none;
  width: auto;
    height: 90%;
}
.date{
  border: 3px solid none;
  width: auto;
  height: 100%;
  font-size: 20px;
font-weight: bold;
display: flex;
align-items: center;
padding: 0px 0px 0px 15px;
color: grey;
}
.left1{
border: 8px solid none;
width: 50%;
display: flex;
justify-content:right;
}
.part2{
  border: 5px solid none;
  width: 80%;
  height: 70%;


}
.badges{

  border: 1px solid none;
  width: 90%;
  height: 70%;
  background: white;
  border-radius:30px;
  

}
.badge{
  border: 1px solid none;
  width: 100%;
  height: 50%;
  display: flex;
  justify-content: flex-end;
  align-items: center;

}
.badge1{
  border: 1px solid none;
  height: 80%;
  width:100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.badge1 img{
  height: 90%;
  width:80%;
}
.calendar{
  border: 1px solid none;
  width: 90%;
  height: 55%;
  background: white;
  border-radius:30px;
}
.back2{
  border: 5px solid none;
  width: 90%;
  height: 5%;
  display:flex;
  justify-content: center;
  align-items: center;
}
.back4{
  display: flex;
  justify-content: center;
  width: 50%;
height:120%;

}
.back3{
  border: 1px solid black;
  width: 100%;
height:100%;
border-radius: 20px;
font-size: 18px;
font-weight: bold;

}
.back{
  display: none;
}
@media screen and (max-width:1000px) {


.main{
  display: flex;
  flex-direction: column;
    height: 1800px;

}
.part1{
  width: 100%;
}
.courses{
  width: 100%;
}
.more{
  width: 100%;
  height: 20%;
  border: 1px solid red;
}
.courses{
  height:35%;
  margin-top: 20px;
  
}
.info1{
  padding-left: 10px;
  
}

.courseName{
  font-size: 20px;
}
.TeacherName{
    font-size: 17px;
}
.enterButton{
  
      padding-left: 0px;
      font-size: 16px;
    color:white;
    width:120%;
    display: flex;
    align-items: center;
justify-content: center;   
}
.fotoja img{
  width: 100%;
  height: 60%;
}
.date{
    font-size: 20px;
}
.button2{
  font-size:30px;
  margin-top: 8px;

}
.left1{
  width: 100%;
  height: 100%;
  margin-top: 20px;

}
.part2{
  width: 100%;
  height: 100%;



}
.badges{
  height: 30%;
  width: 100%;
  margin:20px 0px 20px 0px;
}
.badge{
  height: 50%;
}
.name1{
  width: 100%;

  display: flex;
  justify-content: center;
  align-items:center;
}
.name1 p {
  font-size:35px;
}
.calendar{
  height: 30%;
    margin-top: 20px;
      width:100%;
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
.icon1{
  border:5px solid none;
   height:50px;
  width: 150px;
  display: flex;
  justify-content: left;
  align-items: center;

}
.icon1 img{
  border:5px solid none;
   height:80px;

  display: flex;
  justify-content: left;


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


.back3{
  color: white;
  width: 80%;
  height: 100%;
  border-radius: 20px;
  background: blue;
  font-size:25px;
}
.back{
margin:50px 0px 100px 0px;
  width: 100%;
  height: 10%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.back1{
  color: white;
  width: 40%;
  height: 120%;
  border-radius: 20px;
  background: lightpink;
  font-size:30px;
}
.back2{

  width: 100%;
  height: 20%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.back4{
 width: 80%;
 height: 50%;

}

}

  </style>
</head>

<body>
  <div style="border:5px solid none; height:100px; width:90%;">
<?php include("NavBarAdmin.php") ?>
  </div>
  <div style=" height:auto; width:90%;">
   
  <div class="main">
    <div class="part1">
      <div class="name1">
        <p>My courses</p>
      </div>
      <div class="courses">
        <div class="course">


        <div class="course1">
          <div class="fotoja">
<img src="../parts/best.png" alt="">
          </div>
          <div class="info1">
            <div class="courseName">
<p>Laravel</p>
            </div>
            <div class="TeacherName">
              <p>Teacher : Fatjona Hoxhaj</p>

            </div>
            <div class="button1">
<button  class="enterButton" >Enter
   This Course</button>
            </div>
            <div class="courseName12" >
<p>14.10.2022</p>
            </div>


          </div>
          <div class="div1">


          <div class="date">
            <p>14.10.2022</p>

          </div>
            </div>


      </div>

    </div>



  </div>

<div class="courses">
  <div class="course">


  <div class="course1">
    <div class="fotoja">
<img src="../parts/best.png" alt="">
    </div>
    <div class="info1">
      <div class="courseName">
<p>Laravel</p>
      </div>
      <div class="TeacherName">
        <p>Teacher : Fatjona Hoxhaj</p>

      </div>
       <div class="button1">
<button  class="enterButton" >Enter
   This Course</button>
      </div>
      <div class="courseName12">
<p>14.10.2022</p>
      </div>


    </div>
    <div class="div1">


    <div class="date">
      <p>14.10.2022</p>

    </div>
      </div>


</div>

</div>



</div>
<div class="back2">
<div class="back4">
  <button type="button" name="button" class="back3" style="background-color: magenta;color:white;font-family: red hat mono,cursive;">View All Classes</button>
</div>
</div>



</div>


<div class="left1">


<div class="part2">
  <div class="name1">
    <p>Badges</p>

  </div>
  <div class="badges">
    <div class="badge">


<div class="badge1">

<img src="../parts/best.png" alt="">
</div>
<div class="badge1">
<img src="../parts/best.png" alt="">

</div>
<div class="badge1">

<img src="../parts/best.png" alt="">
</div>
  </div>
  <div class="badge">


<div class="badge1">

<img src="../parts/best.png" alt="">
</div>
<div class="badge1">

<img src="../parts/best.png" alt="">
</div>
<div class="badge1">
<img src="../parts/best.png" alt="">

</div>
</div>


  </div>
  <div class="name1">
    <p>Calendar</p>

  </div>
  <div class="calendar">
<div class="calendar1">

</div>
  </div>
  <div class="back">
    <button type="button" name="button" class="back1"  style="background-color: magenta;height:50%;
    font-family:red hat mono,cursive;">Home</button>

  </div>

</div>
</div>



</div>

  </div>
</body>

</html>
