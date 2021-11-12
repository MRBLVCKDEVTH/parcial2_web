<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5. Intercambio de variable PHP</title>
</head>
<body>
	<?php 
		$registros = array(
			array("id" => 1, "nombre" => "Luis", "edad" => 128, "sexo" => "M"),
			array("id" => 2, "nombre" => "Briseyda", "edad" => 17, "sexo" => "F"),
			array("id" => 3, "nombre" => "Paul", "edad" => 777, "sexo" => "M"),
			array("id" => 4, "nombre" => "Paola", "edad" => 17, "sexo" => "F"),
			array("id" => 5, "nombre" => "Jahaziel", "edad" => 100, "sexo" => "M"),
			array("id" => 6, "nombre" => "Diana", "edad" => 17, "sexo" => "F"),
		);
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
	<div style="background-color: gray; text-align: center; color: white; padding: 30px;">
			<h4><b>Alumno:</b> PEREZ SILVA LUIS ENRIQUE</h4>
			<h4><b>Materia:</b> DESARROLLA APLICACIONES WEB CON CONEXIÓN A BASE DE DATOS</h4>
			<a href="http://localhost/parcial2/luis/">  Volver al Indice</a>
			<h4>Practicas del Semestre #5</h4>
		</div>
</body>
</html>