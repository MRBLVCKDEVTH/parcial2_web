<?php
	
	$nombre = $_GET["nombre"];
	$edad = $_GET["edad"];
	$correo = $_GET["correo"];
	$fecha_nacimiento = $_GET["fecha_nacimiento"];
	$sexo = $_GET["sexo"];
	$areas = $_GET["areas"];
	

	echo "El  nombre del cliente es:" . $nombre;
	echo "<br><br>";

	echo "La edad del cliente es:" . $edad;
	echo "<br><br>";

	echo "El  correo del cliente es:" . $correo;
	echo "<br><br>";

	echo "El  cumpleaños del cliente es:" . $fecha_nacimiento;
	echo "<br><br>";

	echo "El  sexo del cliente es:" . $sexo;
	echo "<br><br>";

	echo "Areas de preferencia:<br><br>";
	for ($i=0; $i < count($areas) ; $i++) {
		echo $areas[$i] . "<br>"; 
	}	

	echo "<div style='background-color: gray; text-align: center; color: white; padding: 30px;'>
			<h4><b>Alumno:</b> PEREZ SILVA LUIS ENRIQUE</h4>
			<h4><b>Materia:</b> DESARROLLA APLICACIONES WEB CON CONEXIÓN A BASE DE DATOS</h4>
			<a href='http://localhost/parcial2/luis/practica3.html'>  Volver al Formulario</a>
			<h4>Practicas del Semestre #5</h4>
		</div>"; 	

?>