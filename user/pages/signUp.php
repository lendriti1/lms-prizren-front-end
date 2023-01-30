<html>
  <head>
    <title> DIGILABS - Sign Up</title>


    <style media="screen">
      body{
  background: black;
}
.sign-up1{

 border:5px solid none;
  height: 100%;
  width: 1  00%;
  display: flex;
  justify-content: center;
  background: black;

}

#cars{
  padding-left: 35px;
  background: #221C1C;
  border-radius: 50px;
    color:#9da3ac;
    font-size:18px;
    font-weight: bold;
  height:100%;
  width: 100%;
  display: flex;
align-items: center;

}
.inputi12{
  border: 1px solid black;
  width: 100%;
  height: 100%;
background: #221C1C;
border-radius: 50px;
display: flex;
align-items: center;
font-size:18px;
font-weight: bold;
justify-content: left;
  color:#9da3ac;
  padding-left: 40px;
}
.part1{
  border:5px solid none;
   height:600px;
  width: 100%;


}

.hapsire1{
  width: 100%;
  height:40px;
  background: black;
}
.fotoja1{
  border:5px solid none;
  height:600px;
  width: 100%;
  border-radius: 50px;
}
.fotoja1 img{
  height:100%;
  width: 100%;
  border-radius: 50px;
}
.center1{
  border:5px solid none;
  height:600px;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: left;
  padding-top: 40px;
  padding-left: 60px;


}
.login1{
  border:5px solid none;
height:100%;
  width: 100%;
  border-radius: 50px;
  flex-wrap: wrap;

}
.hapsire{
 border:3px solid none;
  height:auto;
  width: 100%;


}

.inputet{
   border:3px solid none;
   height: 70%;
   width: 70%;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
     padding-top: 20px;

}
.inputi{
  border:3px solid none;
  height:15%;
  width: 90%;



   display: flex;
  justify-content: center;
    align-items: center;

}
.inputi1{
     border:2px solid none;
  height:100%;
  width:100%;
  border-radius: 50px;
  color: white;
  font-size: 18px;
font-weight: bold;
 background-color: #221C1C;
  padding-left: 40px;
}
.ikona1{
  border:2px solid none;
  height:120%;
  width: 10%;
  display: inline;
  padding-left: 40px;
  box-sizing: border-box;


}
.inputiBtn{
   border:1px solid none;
  height:100%;
  width: 100%;
  border-radius: 50px;
  display: flex;
  justify-content: center;
    padding-top: 10px;
}

.hapsire2{
  display: flex;
  align-items: center;
  justify-content: right;
}
.btn-signUp{
  height: 50px;
    width: 40%;
  color:white;
font-weight: bold;
font-size: 22px;
  border-radius: 20px;
  font-family: red hat mono,cursive;


}
.txtColor{
      color:magenta;
      font-weight: bold;
      font-size: 20px;
      font-family: red hat mono,cursive;
      letter-spacing: 0px;
    }
@media screen and (max-width:800px) {


  #cars{
    background: #221C1C;
    border: 1px solid black;
    border-radius: 50px;
      color:#9da3ac;
    height:100%;
  }
.center1{
  display: flex;
  align-items: center;
    padding-left: 0px;
}
  .sign-up1{

  flex-direction: column;
  align-items: center;
  }
  .fotoja1{

    height:300px;
    width: 100%;
    border-radius: 50px;
  }

.part1{
    height:300px;
}
.login1{
display: flex;
align-items: center;
}
.btn-signUp{
  height: 50px;
    width: 60%;
    font-size: 18px;

}
.inputiBtn{
  display: flex;
  justify-content: center;
}
.inputet{
width: 100%;
      padding-left: 0px;
}


}

    </style>

    <?php
    include("../parts/navbar.php")
    ?>

<div class="sign-up1">
  <div class="part1">
    <div class="fotoja1">
<img src="../images/foto1.jpg" alt="fotoja">        </div>
  </div>
  <div class="center1">


    <div class="login1">
      <div class="hapsire">
        <p class="txtColor" style="padding-left: 15px;"> if ( student != you) {</p>
        <p class="txtColor" style="padding-left: 35px;">echo "Sign Up, choose your group and the time you want to study";</p>
      </div>
      <div class="inputet">
        <div class="inputi">
          <!-- <div class="ikona1">

          </div> -->
          <input type="email" class="inputi1" placeholder="Email Address">
        </div>
        <div class="inputi">

          <input type="text" class="inputi1" placeholder="Phone Number">
        </div>
        <div class="inputi">

<p class="inputi12" >Select time and date you want to study</p>



        </div>  <div class="inputi">

          <select id="cars" >
            <option value="">Choose</option>
          <option value="">Monday 2:00-3:30</option>
          <option value="">Monday 2:00-3:30</option>
          <option value="">Monday 2:00-3:30</option>
          <option value="">Monday 2:00-3:30</option>
        </select>
          </div>

        <div class="inputi">

          <input type="text" class="inputi1" placeholder="Your age">
        </div>
        <div class="inputi">
          <div class="inputiBtn">
        <a href="#" style="text-decoration:none"><button type="button" class="btn-signUp"  style="background:magenta">Sign Up</a></button>
          </div>
        </div>

      </div>

      <div class="hapsire">
        <p class="txtColor" style="padding-left: 15px;">}</p>
        <p class="txtColor" style="padding-left: 35px;">else {</p>
        <p class="txtColor" style="padding-left: 55px;"> echo "Sign Up";</p>
        <p class="txtColor" style="padding-left: 55px;"> exit()</p>
        <p class="txtColor" style="padding-left: 35px;"> }</p>
      </div>


    </div>
  </div>
</div>

  </head>
</html>
