<?php 

/* Funciones útiles para arreglos

*/

$persona = array(
	'telefono' => '9811234567',
	'edad' => 15,
	'pais' => 'México'
);

// Nos permite extraer los elementos de un arreglo como si fueran variables
extract($persona);

echo $edad . '<br>';
echo $pais . '<br>';

$semana = array(
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo'
);

// Nos permite extraer el último elemento de un arreglo
$ultimo_dia = array_pop($semana);

foreach ($semana as $dia)
{
	echo $dia . '<br>';
}

echo $ultimo_dia . '<br>';

// Nos devuelve una cadena con todos los elementos de un arreglo separado por un caracter
echo join(', ', $semana);

// Nos devuelve el número de elementos de un arreglo
count($semana);

// Nos ordena de manera ascedente los elementos de un arreglo
// sort($semana);

// Nos ordena de manera descendente los elementos de un arreglo
// rsort($semana);

// Nos permite invertir los elementos de un arreglo
$array_reverse = array_reverse($semana);
echo join(' - ', $array_reverse);

?>