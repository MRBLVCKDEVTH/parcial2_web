<?php
	echo "Mi primer programa en PHP";
	echo "<br><br>";

	echo "<h1 style='color:green;'>Lista de numeros</h1>";
	for ($i=0; $i <10; $i++) { 
		
		echo $i+1 . "<br>";
	}

	for ($i=0; $i < 60; $i++) { 
		if($i % 2 == 0){
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:green'>";
		}else{
		echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:gray'>";
		}
		echo $i+1;
		echo "</div>";
	}
	echo "<div style='background-color: gray; text-align: center; color: white; padding: 30px;'>
			<h4><b>Alumno:</b> PEREZ SILVA LUIS ENRIQUE</h4>
			<h4><b>Materia:</b> DESARROLLA APLICACIONES WEB CON CONEXIÓN A BASE DE DATOS</h4>
			<a href='http://localhost/parcial2/luis/'>  Volver al Indice</a>
			<h4>Practicas del Semestre #5</h4>
		</div>";
?>