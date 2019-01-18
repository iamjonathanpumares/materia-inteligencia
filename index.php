<?php

$nombre = "Jonathan Pumares";
$saludo = 'Hola ' . $nombre;

$paises = [
	'México',
	'Costa Rica',
	'Honduras',
	'Ecuador'
];

$persona = [
	'nombre' => 'Jonathan',
	'apellido' => 'Pumares',
	'edad' => 15
];

// echo $persona['nombre'] . '<br>';
// echo $persona['apellido'] . '<br>';

foreach ($persona as $clave => $valor)
{
	echo $persona[$clave] . '<br>';
}

// echo $paises[0] . '<br>';
// echo $paises[1] . '<br>';
// echo $paises[2] . '<br>';

foreach ($paises as $pais) 
{
	echo $pais . '<br>';
}

echo $saludo;

$nombre = 12;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hola culebrita</title>
</head>
<body>
	<p>Saludos</p>
	<h1><?php echo $nombre; ?></h1>
</body>
</html>
