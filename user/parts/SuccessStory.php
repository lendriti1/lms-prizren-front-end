
<html>
  

<head>
  <style>
  

.coverflow {
 
  position:relative;
  height: 460px;
  padding: 30px;
  overflow-x: hidden;
 
  -webkit-perspective: 1000px;
  perspective: 1000px;
 


}

.coverflow__image {
    border-radius:20px;
  width: 300px;
  height: 400px;
  -webkit-transition: all 550ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 550ms cubic-bezier(0.215, 0.61, 0.355, 1);
margin-left:50px;
}

.coverflow__image[data-coverflow-index] {
  position: absolute;
  left: 50%;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

.coverflow__image[data-coverflow-index]:before {
  content: " ";
  z-index: 1;
  position: absolute;
  top: 300px;
  width: 100%;
  height: 10%;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.7);
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 5;
  -webkit-transform: translateX(370px) scale(0.05) rotateY(-45deg);
  transform: translateX(370px) scale(0.05) rotateY(-45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 4;
  -webkit-transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 3;
  -webkit-transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 2;
  -webkit-transform: translateX(640px) scale(-0.4) rotateY(-45deg);
  transform: translateX(640px) scale(-0.4) rotateY(-45deg);
  opacity: -0.66667;
}

.coverflow[data-coverflow-position="1"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 1;
  -webkit-transform: translateX(730px) scale(-0.55) rotateY(-45deg);
  transform: translateX(730px) scale(-0.55) rotateY(-45deg);
  opacity: -0.83333;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 5;
  -webkit-transform: translateX(370px) scale(0.05) rotateY(-45deg);
  transform: translateX(370px) scale(0.05) rotateY(-45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 4;
  -webkit-transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 3;
  -webkit-transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="2"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 2;
  -webkit-transform: translateX(640px) scale(-0.4) rotateY(-45deg);
  transform: translateX(640px) scale(-0.4) rotateY(-45deg);
  opacity: -0.66667;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 5;
  -webkit-transform: translateX(370px) scale(0.05) rotateY(-45deg);
  transform: translateX(370px) scale(0.05) rotateY(-45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 4;
  -webkit-transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="3"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 3;
  -webkit-transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  transform: translateX(550px) scale(-0.25) rotateY(-45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 5;
  -webkit-transform: translateX(370px) scale(0.05) rotateY(-45deg);
  transform: translateX(370px) scale(0.05) rotateY(-45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="4"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 4;
  -webkit-transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  transform: translateX(460px) scale(-0.1) rotateY(-45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="5"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 5;
  -webkit-transform: translateX(370px) scale(0.05) rotateY(-45deg);
  transform: translateX(370px) scale(0.05) rotateY(-45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 5;
  -webkit-transform: translateX(-770px) scale(0.05) rotateY(45deg);
  transform: translateX(-770px) scale(0.05) rotateY(45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="6"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 6;
  -webkit-transform: translateX(280px) scale(0.2) rotateY(-45deg);
  transform: translateX(280px) scale(0.2) rotateY(-45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 4;
  -webkit-transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 5;
  -webkit-transform: translateX(-770px) scale(0.05) rotateY(45deg);
  transform: translateX(-770px) scale(0.05) rotateY(45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="7"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 7;
  -webkit-transform: translateX(190px) scale(0.35) rotateY(-45deg);
  transform: translateX(190px) scale(0.35) rotateY(-45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 3;
  -webkit-transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 4;
  -webkit-transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 5;
  -webkit-transform: translateX(-770px) scale(0.05) rotateY(45deg);
  transform: translateX(-770px) scale(0.05) rotateY(45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="8"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 8;
  -webkit-transform: translateX(100px) scale(0.5) rotateY(-45deg);
  transform: translateX(100px) scale(0.5) rotateY(-45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 2;
  -webkit-transform: translateX(-1040px) scale(-0.4) rotateY(45deg);
  transform: translateX(-1040px) scale(-0.4) rotateY(45deg);
  opacity: -0.66667;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 3;
  -webkit-transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 4;
  -webkit-transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 5;
  -webkit-transform: translateX(-770px) scale(0.05) rotateY(45deg);
  transform: translateX(-770px) scale(0.05) rotateY(45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.coverflow[data-coverflow-position="9"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 9;
  -webkit-transform: translateX(10px) scale(0.65) rotateY(-45deg);
  transform: translateX(10px) scale(0.65) rotateY(-45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="1"] {
  z-index: 1;
  -webkit-transform: translateX(-1130px) scale(-0.55) rotateY(45deg);
  transform: translateX(-1130px) scale(-0.55) rotateY(45deg);
  opacity: -0.83333;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="2"] {
  z-index: 2;
  -webkit-transform: translateX(-1040px) scale(-0.4) rotateY(45deg);
  transform: translateX(-1040px) scale(-0.4) rotateY(45deg);
  opacity: -0.66667;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="3"] {
  z-index: 3;
  -webkit-transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  transform: translateX(-950px) scale(-0.25) rotateY(45deg);
  opacity: -0.5;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="4"] {
  z-index: 4;
  -webkit-transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  transform: translateX(-860px) scale(-0.1) rotateY(45deg);
  opacity: -0.33333;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="5"] {
  z-index: 5;
  -webkit-transform: translateX(-770px) scale(0.05) rotateY(45deg);
  transform: translateX(-770px) scale(0.05) rotateY(45deg);
  opacity: -0.16667;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="6"] {
  z-index: 6;
  -webkit-transform: translateX(-680px) scale(0.2) rotateY(45deg);
  transform: translateX(-680px) scale(0.2) rotateY(45deg);
  opacity: 0;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="7"] {
  z-index: 7;
  -webkit-transform: translateX(-590px) scale(0.35) rotateY(45deg);
  transform: translateX(-590px) scale(0.35) rotateY(45deg);
  opacity: 0.16667;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="8"] {
  z-index: 8;
  -webkit-transform: translateX(-500px) scale(0.5) rotateY(45deg);
  transform: translateX(-500px) scale(0.5) rotateY(45deg);
  opacity: 0.33333;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="9"] {
  z-index: 9;
  -webkit-transform: translateX(-410px) scale(0.65) rotateY(45deg);
  transform: translateX(-410px) scale(0.65) rotateY(45deg);
  opacity: 0.5;
}

.coverflow[data-coverflow-position="10"] .coverflow__image[data-coverflow-index="10"] {
  z-index: 10;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  box-shadow: 0 1px 25px 10px rgba(0, 0, 0, 0.6);
}

.prev-arrow,
.next-arrow {
  cursor: pointer;
  z-index: 10;
  position: absolute;
  top: 50%;
  padding: 1.5rem 2rem;
  color: rgba(255, 255, 255, 0.5);
  font-size: 3rem;
  line-height: 3rem;
  background: transparent;
  border-radius: 1rem;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: color 200ms, background 200ms;
  transition: color 200ms, background 200ms;
}

.prev-arrow:hover,
.next-arrow:hover,
.prev-arrow:focus,
.next-arrow:focus {
  color: rgba(255, 255, 255, 0.9);
  background: rgba(0, 0, 0, 0.5);
}

.prev-arrow {
  left: 0%;
}

.prev-arrow:before {
  content: "❮";
}

.next-arrow {
  right: 0%;
}

.next-arrow:after {
  content: "❯";
}

@media screen and (min-width:0px) and (max-width:500px){
.coverflow__image {
  width: 250px;
 margin-left:80px;
}
.paragraph1{
color:magneta;
text-align:center;
font-size:35px;
}
}

  </style>
 
  </head>
  <body>
    
     <div style="width:100%;height:100px;display:flex;align-items:center;justify-content:center;">
     <p class='paragraph1'  style="color:#FF00FF;margin-bottom:50px;">.SuccessStory()</p>
      </div>
    <div style="width:100%;height:470px;">
    <section class="row" >
  <div class="nine columns"   style="width:100%;">
    <div class="coverflow top10 bot10"  >
      <a id="a1" class="prev-arrow" style="color:white;" ></a>
       <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
        <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
         <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
          <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
           <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
            <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
             <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
              <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
               <a href="#"><img src="../parts/images/Capture.JPG" class="coverflow__image"  > </a>
                   
                   
         
                     
          
       

      <a  id="a1" class="next-arrow" style="color:white"></a>
    </div>
     </div>
  </div>
</section>
<script>

var a = document.getElementById("a1");
var cfImg = document.getElementsByClassName("coverflow__image")

var scaleI = 0;
for (scaleI; scaleI < a.length; scaleI++) {
  if (scaleI === 3) {
    continue;
  } else {
    a[scaleI].style.cursor = "pointer";
    a[scaleI].addEventListener("click", prevDef);
  }
}

function prevDef(e) {
  e.preventDefault();
}

function forScale(coverflowPos) {
  for (scaleI = 0; scaleI < a.length; scaleI++) {
    a[scaleI].style.cursor = "pointer";
    a[scaleI].addEventListener("click", prevDef);
  }
  for (scaleI = 0; scaleI < cfImg.length; scaleI++) {
    if (cfImg[scaleI].getAttribute("data-coverflow-index") == coverflowPos) {
      cfImg[scaleI].parentElement.style.cursor = "pointer";
      cfImg[scaleI].parentElement.removeEventListener("click", prevDef);
    }
  }
}
//end added by Chase

function setupCoverflow(coverflowContainer) {
  var coverflowContainers;

  if (typeof coverflowContainer !== "undefined") {
    if (Array.isArray(coverflowContainer)) {
      coverflowContainers = coverflowContainer;
    } else {
      coverflowContainers = [coverflowContainer];
    }
  } else {
    coverflowContainers = Array.prototype.slice.apply(document.getElementsByClassName('coverflow'));
  }

  coverflowContainers.forEach(function(containerElement) {
    var coverflow = {};
    var prevArrows, nextArrows;

    //capture coverflow elements
    coverflow.container = containerElement;
    coverflow.images = Array.prototype.slice.apply(containerElement.getElementsByClassName('coverflow__image'));
    coverflow.position = Math.floor(coverflow.images.length / 2) + 1;

    //set indicies on images
    coverflow.images.forEach(function(coverflowImage, i) {
      coverflowImage.dataset.coverflowIndex = i + 1;
    });

    //set initial position
    coverflow.container.dataset.coverflowPosition = coverflow.position;

    //get prev/next arrows
    prevArrows = Array.prototype.slice.apply(coverflow.container.getElementsByClassName("prev-arrow"));
    nextArrows = Array.prototype.slice.apply(coverflow.container.getElementsByClassName("next-arrow"));

    //add event handlers
    function setPrevImage() {
      coverflow.position = Math.max(1, coverflow.position - 1);
      coverflow.container.dataset.coverflowPosition = coverflow.position;
      //call the functin forScale added
      forScale(coverflow.position);
    }

    function setNextImage() {
      coverflow.position = Math.min(coverflow.images.length, coverflow.position + 1);
      coverflow.container.dataset.coverflowPosition = coverflow.position;
      //call the function Chase added
      forScale(coverflow.position);
    }

    function jumpToImage(evt) {
      coverflow.position = Math.min(coverflow.images.length, Math.max(1, evt.target.dataset.coverflowIndex));
      coverflow.container.dataset.coverflowPosition = coverflow.position;
      //start added by Chase
      setTimeout(function() {
        forScale(coverflow.position);
      }, 1);
      //end added by Chase
    }

    function onKeyPress(evt) {
      switch (evt.which) {
        case 37: //left arrow
          setPrevImage();
          break;
        case 39: //right arrow
          setNextImage();
          break;
      }
    }
    prevArrows.forEach(function(prevArrow) {
      prevArrow.addEventListener('click', setPrevImage);
    });
    nextArrows.forEach(function(nextArrow) {
      nextArrow.addEventListener('click', setNextImage);
    });
    coverflow.images.forEach(function(image) {
      image.addEventListener('click', jumpToImage);
    });
    window.addEventListener('keyup', onKeyPress);
  });
}

setupCoverflow();
</script>
  </body>

</html>