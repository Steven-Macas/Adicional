<?php
$j1=mt_rand(30,50);
$j2=mt_rand(30,50);
if ($j2==$j1) {
	while ($j2==$j1) {
		$j2=mt_rand(30,35);
	}
}
$j3=mt_rand(30,50);
if ($j3==$j1 || $j3==$j2) {
	while ($j3==$j1 || $j3==$j2) {
		$j3=mt_rand(30,35);
	}
}
$j4=mt_rand(30,50);
if ($j4==$j3 || $j3==$j1 || $j3==$j2) {
	while ($j4==$j3 || $j3==$j1 || $j3==$j2) {
		$j4=mt_rand(30,35);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Carrera, Sistema solar-->
	<title>Coches </title>
	<link rel="icon" href="./image/logo.png"/>
	<style>
	body{
		background: linear-gradient(to right, #ffffff, #24485c);
	}
	.todos{
		margin-top: 1%;
		margin-left: 1%;
	}
	/*Las figuras*/
	#obj1{
		position: absolute;
		animation: correr <?php print($j1);?>s ;
		animation-timing-function: linear;
	}
	#obj2{
		position: absolute;
		animation: correr <?php print($j2);?>s ;
		animation-timing-function: linear;
	}
	#obj3{
		position: absolute;
		animation: correr <?php print($j3);?>s ;
		animation-timing-function: linear;
	}
	#obj4{
		position: absolute;
		border-radius: 50%;
		animation: correr <?php print($j4);?>s ;
		animation-timing-function: linear;
	}

	/*Movimiento de las figuras*/
	@keyframes correr{
		0%{left: 0; top: 0;}
		7%{transform: rotateZ(0deg);}
		8%{left: 92%; top: 0; transform: rotateZ(90deg);}
		15%{transform: rotateZ(90deg);}
		16%{left: 92%;top: 85%; transform: rotateZ(180deg);}
		23%{transform: rotateZ(180deg);}
		24%{left: 0; top: 85%; transform: rotateZ(270deg);}
		31%{transform: rotateZ(270deg);}
		32%{left: 0; top: 15%; transform: rotateZ(360deg);}
		39%{transform: rotateZ(360deg);}
		40%{left: 85%; top: 15%; transform: rotateZ(450deg);}
		47%{transform: rotateZ(450deg);}
		48%{left: 85%; top: 74%; transform: rotateZ(540deg);}
		55%{transform: rotateZ(540deg);}
		56%{left: 6%; top: 74%; transform: rotateZ(630deg);}
		63%{transform: rotateZ(630deg);}
		64%{left: 6%; top: 29%; transform: rotateZ(720deg);}
		71%{transform: rotateZ(720deg);}
		72%{left: 76%; top: 29%; transform: rotateZ(810deg);}
		79%{transform: rotateZ(810deg);}
		80%{left: 76%; top: 62%; transform: rotateZ(900deg);}
		87%{transform: rotateZ(900deg);}
		88%{left: 17%; top: 62%; transform: rotateZ(990deg);}
		95%{transform: rotateZ(990deg);}
		96%{left: 17%; top: 47%; transform: rotateZ(1080deg);}
		98%{opacity: 1;}
		99%{opacity: 0; transform: rotateZ(1080deg);}
		100%{left: 70%; top: 47%;opacity: 0; transform: rotateZ(1180deg);}

	}
	/*La linea de salida y meta*/
	#salida{	
		position: absolute;
		background: repeating-linear-gradient(to bottom, white, black);
		width: 1%;
		height: 10%;
		z-index: 1;
		margin-left: 8%;
		animation: salida 1s;
	}
	
	@keyframes salida{
		from{
			opacity: 1;
		}
		to{
			opacity: 0;
		}
	}
	#meta{
		position: absolute;
		background: repeating-linear-gradient(to bottom, #f3ff9f, #6d7c04);
		width: 1%;
		height: 10%;
		z-index: 1;
		margin-left: 50%;
		margin-top: 23%;
		animation: meta 1.5s infinite;
		animation-timing-function: linear;
		z-index: 1;
	}
	@keyframes meta{
		from{
			opacity: 1;
		}
		to{
			opacity: 0;
		}
	}
	#llegada{
		position: absolute;
		background: repeating-linear-gradient(to right, #ebff60, #f6fdc1);
		width: 16%;
		height: 10%;
		z-index: 1;
		margin-left: 52%;
		margin-top: 23%;
	}
	/*Posición de los caminos*/
	#v1{
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 94%;
		height: 10%;
		border-bottom: transparent;
	}
	#v2{
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 5%;
		height: 94%;
		margin-left: 93%;
		border-left: transparent;
		border-bottom: transparent;
	}
	#v3{
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 98%;
		height: 10%;
		margin-top: 43%;
		border-top: transparent;
		border-right: transparent;
		z-index: -1;
	}
	#v4{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 5%;
		height: 80%;
		margin-top: 7%;
		border-right: transparent;
		border-bottom: transparent;
	}
	#v5{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 90%;
		height: 10%;
		margin-top: 7%;
		border-bottom: transparent;
	}
	#v6{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 5%;
		height: 67%;
		margin-top: 7%;
		margin-left: 86%;
		border-left: transparent;
	}
	#v7{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 84%;
		height: 10%;
		margin-left: 7%;
		margin-top: 36%;
		border-top: transparent;
	}
	#v8{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 5%;
		height: 50%;
		margin-top: 15%;
		margin-left: 7%;
		border-right: transparent;
		border-bottom: transparent;
	}
	#v9{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 75%;
		height: 10%;
		margin-left: 7%;
		margin-top: 15%;
		border-bottom: transparent;
		border-right: transparent;
	}
	#v10{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 5%;
		height: 38%;
		margin-top: 15%;
		margin-left: 77%;
		border-left: transparent;
		border-bottom: transparent;
	}
	#v11{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 64%;
		height: 10%;
		margin-left: 18%;
		margin-top: 30%;
		border-right: transparent;
		border-top: transparent;
		z-index: -1;
	}
	#v12{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: linear-gradient(to top, #806000, #ffc720);
		width: 5%;
		height: 24%;
		margin-top: 23%;
		margin-left: 18%;
		border-right: transparent;
		border-bottom: transparent;
	}
	#v13{
		position: fixed;
		border: 2px solid black;
		position: absolute;
		background: #606060;
		width: 50%;
		height: 10%;
		margin-left: 18%;
		margin-top: 23%;
		border-bottom: transparent;
		border-left: transparent;
		z-index: -1;
	}

	/*Pelotas de colores fondo*/
	#pelota1{
		position: absolute;
		width: 5%;
		height: 10%;
		background-color: red;
		border: 2px solid red;
		margin-left: 12%;
		border-radius: 50%;
		animation: botar 3s infinite;
		animation-timing-function: linear;
		z-index: -2;
		box-shadow: 1px 0 10px 10px #f89b9b;
	}
	#pelota2{
		position: absolute;
		width: 5%;
		height: 10%;
		background-color: green;
		border: 2px solid green;
		margin-left: 27%;
		border-radius: 50%;
		animation: botar 3s infinite;
		animation-timing-function: linear;
		z-index: -2;
		box-shadow: 1px 0 10px 10px #a7f89b;
	}
	#pelota3{
		position: absolute;
		width: 5%;
		height: 10%;
		background-color: yellow;
		border: 2px solid yellow;
		margin-left: 42%;
		border-radius: 50%;
		animation: botar 3s infinite;
		animation-timing-function: linear;
		z-index: -2;
		box-shadow: 1px 0 10px 10px #edf89b;
	}
	#pelota4{
		position: absolute;
		width: 5%;
		height: 10%;
		background-color: blue;
		border: 2px solid blue;
		margin-left: 60%;
		border-radius: 50%;
		animation: botar 3s infinite;
		animation-timing-function: linear;
		z-index: -2;
		box-shadow: 1px 0 10px 10px #9bd6f8;
	}#pelota5{
		position: absolute;
		width: 5%;
		height: 10%;
		background-color: whitesmoke;
		border: 2px solid #ffffff;
		margin-left: 75%;
		border-radius: 50%;
		animation: botar 3s infinite;
		animation-timing-function: linear;
		z-index: -2;
		box-shadow: 1px 0 10px 10px #e1f3fd;
	}
	@keyframes botar{
		0%{bottom: 0;}
		25%{bottom: 40%;}
		50%{bottom: 70%;}
		75%{bottom: 80%;}
		100%{bottom: 100%;}
	}
	</style>
</head>
<body>
	<!--Carreras-->
	<div id="salida"></div>
	<div id="meta"></div>
	<div id="llegada"></div>
	<div id="v1"></div>
	<div id="v2"></div>
	<div id="v3"></div>
	<div id="v4"></div>
	<div id="v5"></div>
	<div id="v6"></div>
	<div id="v7"></div>
	<div id="v8"></div>
	<div id="v9"></div>
	<div id="v10"></div>
	<div id="v11"></div>
	<div id="v12"></div>
	<div id="v13"></div>
	<div id="v14"></div>
	<div id="v15"></div>
		<div id="obj1" class="todos"><img src="image/coche1.png" width="100"></div>
		<div id="obj2" class="todos"><img src="image/coche2.png" width="100"></div>
		<div id="obj3" class="todos"><img src="image/coche3.png" width="100"></div>
		<div id="obj4" class="todos"><img src="image/coche4.png" width="100"></div>
	<div id="pelota1"></div>
	<div id="pelota2"></div>
	<div id="pelota3"></div>
	<div id="pelota4"></div>
	<div id="pelota5"></div>
</body>
</html>