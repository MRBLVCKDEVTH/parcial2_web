<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php
		$numero= rand(1,4);
		$color = ["#e1bdff", "#f44336", "#335a63", "#f8b414"];
		$numcolor = rand(0,3);
		echo "Numero generado = " . $numero ."<br>"; 
		echo "<div style='color:".$color[$numcolor]."'>color generado</div>";

		if ($numero == 1) {	
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?> ">Titulo de la pagina</h1>

	<?php } elseif($numero == 2) { ?>

		<h2 style="color: <?php echo $color[$numcolor]; ?> ">Titulo de la pagina 2</h2>

	<?php }elseif ($numero == 3) { ?>
	
		<h3 style="color: <?php echo $color[$numcolor]; ?> ">Titulo 3 de la pagina</h3>

	<?php }else {?>

			<h4 style="color: <?php echo $color[$numcolor]; ?> ">Titulo 4 de la pagina</h4>

	<?php }
	echo "<div style='background-color: gray; text-align: center; color: white; padding: 30px;'>
			<h4><b>Alumno:</b> PEREZ SILVA LUIS ENRIQUE</h4>
			<h4><b>Materia:</b> DESARROLLA APLICACIONES WEB CON CONEXIÓN A BASE DE DATOS</h4>
			<a href='http://localhost/parcial2/luis/'>  Volver al Indice</a>
			<h4>Practicas del Semestre #5</h4>
		</div>"; ?>
</body>
</html>