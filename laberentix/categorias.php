<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Laberentix</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
      <link rel="icon" href="./imagenes/logo.png"/>
        <style>
        	img{
            	display: block;
            }
        	div{
            	display: inline-block;
                margin: 20px;
                margin-left: 90px;
            }
        </style>
	</head>
	<body>
		<?php
		//Eliminamos esta sesión porque cuando vayan a otra categoría y acierten la pregunta les da la insignia directamente
		unset($_SESSION['jefeFinal']);


			echo "<h3 id='eleccionPuerta'>Elije una puerta</h3>";

			//Las puertas son de distintas categorías

			echo "<div class='categoriasAnimacion'>";
            echo "<h4 class='categorias'>Deportes</h4>";
			if($_SESSION['PUERTA1']=="cerrada"){
				echo "<a href='./deportes/deportes.php'><img src='./imagenes/puertaCerrada.png' alt='puerta cerrada' class='puerta'/></a>";
			}elseif($_SESSION['PUERTA1']=="abierta"){
				echo "<img src='./imagenes/puertaAbierta.png' alt='puerta abierta' class='puerta'/>";
			}
			if($_SESSION['INSIGNIA1']=='acertado'){
				echo "<img src='./imagenes/insignia1.png' alt='Insignia Nº1' class='insignias'/>";
			}elseif($_SESSION['INSIGNIA1']=='fallo'){
				echo "<img src='./imagenes/insigniasombra.png' alt='Insignia bloqueada Nº1' class='insignias'/>";
			}
			echo "</div>";
			
			echo "<div class='categoriasAnimacion'>";
            echo "<h4 class='categorias'>Historia</h4>";
			if($_SESSION['PUERTA2']=="cerrada"){
				echo "<a href='./historia/historia.php'><img src='./imagenes/puertaCerrada.png' alt='puerta cerrada' class='puerta'/></a>";
			}elseif($_SESSION['PUERTA2']=="abierta"){
				echo "<img src='./imagenes/puertaAbierta.png' alt='puerta abierta' class='puerta'/>";
			}
			if($_SESSION['INSIGNIA2']=='acertado'){
				echo "<img src='./imagenes/insignia2.png' alt='Insignia Nº2' class='insignias'/>";
			}elseif($_SESSION['INSIGNIA2']=='fallo'){
				echo "<img src='./imagenes/insigniasombra.png' alt='Insignia bloqueada Nº2' class='insignias'/>";
			}
			echo "</div>";
			
			echo "<div class='categoriasAnimacion'>";
            echo "<h4 class='categorias'>Ciencia</h4>";
			if($_SESSION['PUERTA3']=="cerrada"){
				echo "<a href='./ciencia/ciencia.php'><img src='./imagenes/puertaCerrada.png' alt='puerta cerrada' class='puerta'/></a>";
			}elseif($_SESSION['PUERTA3']=="abierta"){
				echo "<img src='./imagenes/puertaAbierta.png' alt='puerta abierta' class='puerta'/>";
			}
			if($_SESSION['INSIGNIA3']=='acertado'){
				echo "<img src='./imagenes/insignia3.png' alt='Insignia Nº3' class='insignias'/>";
			}elseif($_SESSION['INSIGNIA3']=='fallo'){
				echo "<img src='./imagenes/insigniasombra.png' alt='Insignia bloqueada Nº3' class='insignias'/>";
			}
			echo "</div>";
			
			echo "<div class='categoriasAnimacion'>";
            echo "<h4 class='categorias'>Geografía</h4>";
			if($_SESSION['PUERTA4']=="cerrada"){
				echo "<a href='./geografia/geografia.php'><img src='./imagenes/puertaCerrada.png' alt='puerta cerrada' class='puerta'/></a>";
			}elseif($_SESSION['PUERTA4']=="abierta"){
				echo "<img src='./imagenes/puertaAbierta.png' alt='puerta abierta' class='puerta'/>";
			}
			if($_SESSION['INSIGNIA4']=='acertado'){
				echo "<img src='./imagenes/insignia4.png' alt='Insignia Nº4' class='insignias'/>";
			}elseif($_SESSION['INSIGNIA4']=='fallo'){
				echo "<img src='./imagenes/insigniasombra.png' alt='Insignia bloqueada Nº4' class='insignias'/>";
			}
			echo "</div>";
            
            echo "<div class='categoriasAnimacion'>";
            echo "<h4 class='categorias'>Entretenimiento</h4>";
			if($_SESSION['PUERTA5']=="cerrada"){
				echo "<a href='./entretenimiento/entretenimiento.php'><img src='./imagenes/puertaCerrada.png' alt='puerta cerrada' class='puerta'/></a>";
			}elseif($_SESSION['PUERTA5']=="abierta"){
				echo "<img src='./imagenes/puertaAbierta.png' alt='puerta abierta' class='puerta'/>";
			}
			if($_SESSION['INSIGNIA5']=='acertado'){
				echo "<img src='./imagenes/insignia5.png' alt='Insignia Nº5' class='insignias'/>";
			}elseif($_SESSION['INSIGNIA5']=='fallo'){
				echo "<img src='./imagenes/insigniasombra.png' alt='Insignia bloqueada Nº5' class='insignias'/>";
			}
			echo "</div>";

			if ($_SESSION['INSIGNIA1']=='acertado' && $_SESSION['INSIGNIA2']=='acertado' && $_SESSION['INSIGNIA3']=='acertado' && $_SESSION['INSIGNIA4']=='acertado' && $_SESSION['INSIGNIA5']=='acertado') {
				header('Location: fin.php');
			}
		?>
		<a href="./../"><button id="inpEnviar" style="margin-left: 10%; margin-top: 50px;">Volver al menú</button></a>
	</body>
</html>
