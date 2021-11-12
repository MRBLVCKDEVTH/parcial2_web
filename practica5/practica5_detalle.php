<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle de registro</title>
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

	

	if (isset($_GET["id"])) {
		$id = $_GET["id"] - 1;
		echo "<h1>Datos de la persona</h1><hr>";
		echo "ID: ". $_GET["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
	}
	else
	{
		echo "<h1>El dato de ID es requerido</h1>";
	}
 ?>
</body>
</html>