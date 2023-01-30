<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Thumbnail Carousel with Content</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="a.css">
<style media="screen">

body {
  
  font-family: "Open Sans", sans-serif;


}g
.project1{
  display: flex;
  flex-wrap: wrap;
}
.ppart1{

  height: 850px;
  width: 50%;
  display: flex;
  align-items: center;
  justify-content: center;

}
.col{

  height: 90%;
  padding-left: 0px;
  padding-right: 0px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel1{
border:5px solid none;
width:50%;
height:350px;
}
.row{
  display: flex; justify-content: center;
  height: 350px;
  width: 100%;
  margin-left: 0px;
}
.thumb-wrapper{
  width: 300px;

}
.carousel-item{

  border: 5px solid none;
height: 350px;


}.p123{
  margin-left: 50px;
  border:5px solid none;
  height:40%;
  width: 100%;


  }
.teksti2{
  font-size: 25px;
  font-weight: bold;

}
.slide1{
  height: 350px;
  width: 90%;

}
.carousel {
  margin: 30px auto;
    padding: 0 30px;

}

.carousel .carousel-item {
  text-align: center;
  overflow: hidden;
}

.carousel .carousel-item h4 {
  font-family: 'Varela Round', sans-serif;
}
.carousel .carousel-item img {
  max-width: 100%;
  display: inline-block;
}
.carousel .carousel-item .btn {
  border-radius: 0;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: bold;
  border: none;
  background: #a177ff;
  padding: 6px 15px;
  margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
  background: #8c5bff;
}
.name123{
  border:5px solid none;
  width:100%;
  height:100px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.paragraph1{
  font-size: 35px;
  color: purple;
  margin-top: 100px;
}
.thumb-wrapper{
border: 10px solid none;
width: 104%;
height: 100%;
}
.img-box{
  height: 350px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;

background-color: black;
border-radius: 20px;
}
.img-box img{
 height: 80%;
 width: 85%;
 border-radius: 20px;
}

.carousel .carousel-item .btn i {
  font-size: 14px;
  font-weight: bold;
  margin-left: 5px;
}

.carousel .thumb-wrapper {

  text-align: left;
  
  box-shadow: 0px 2px 2px rgba(0,0,0,0.1);
  border-radius: 20px;
}
.carousel .thumb-content {
  padding: 15px;
  font-size: 13px;
}
.carousel-control-prev, .carousel-control-next {
  height: 44px;
  width: 44px;
  background: none;
  margin: auto 0;
  border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
  font-size: 36px;
  position: absolute;
  top: 50%;
  display: inline-block;
  margin: -19px 0 0 0;
  z-index: 5;
  left: 0;
  right: 0;
  color: rgba(0, 0, 0, 0.8);
  text-shadow: none;
  font-weight: bold;
}
.carousel-control-prev i {
  margin-left: -3px;
}

.carousel-control-next i {
  margin-right: -3px;
}
.carousel-indicators {
  bottom: -30px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 4px;
  border: none;
}
.carousel-indicators li {
 
}
.carousel-indicators li.active {
 
}

@media screen and (max-width:1200px) {
.img-box{
height: 350px;
background-color: black;
border-radius: 20px;
}
.thumb-wrapper{
width: 100%;
}
.img-box img{
height: 60%;
width: 70%;
border-radius: 20px;
}
.project1{
  display: flex;
  flex-direction: column;
}
.ppart1{

  width: 100%;
  height: 25%;


}

.carousel1{
  width:100%;
  


width: 100%;
}
.row{
  margin-left: 0px;
  margin-right: 0px;
}
.teksti2{
text-align: center;

}
.p123{
  margin-left: 0px;
}

}

</style>
</head>
<body>
  <div class="mmainn">
    
  </div>
    <div  class="name123">
      <p class="paragraph1"  style="color:#FF00FF">.summerSchool()</p>

      </div>
  <div class="carousel1"  style="width:100%" >


    <div class="container-xxl" style="width:100%">
    	<div class="row" style="display:flex;justify-content:center">
    		<div class="" style="width:90%">
			<div id="myCarousel" class="carousel slide slide1" data-ride="carousel" data-interval="0">

		

			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
									    <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
                <div class="img-box">
                    <img src="../parts/images/logo1.png" class="img-fluid" alt="">
                </div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
							   <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
					</div>
				</div>
       
      
				
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
                <div class="img-box">
                    <img src="../parts/images/logo1.png" class="img-fluid" alt="">
                </div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
									   <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
									   <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
					</div>
				</div>
        	<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
                <div class="img-box">
                    <img src="../parts/images/logo1.png" class="img-fluid" alt="">
                </div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
								   <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
                <a href="#">
								<div class="img-box">
								   <img src="../parts/images/logo1.png" class="img-fluid" alt="">
								</div>
                </a>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev" style="background:white">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next" style="background:white">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
