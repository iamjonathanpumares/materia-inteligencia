<?php 

/* Scope de PHP o el ámbito de las variables es en donde viven nuestras variables

Anotaciones del scope de PHP o el ámbito de las variables:
1. Para acceder a una variable dentro de una función utilizamos la sentencia return

*/

// Variables globales: Son variables que podemos acceder en cualquier parte de nuestro código a excepción de nuestras funciones
$numero = 7;

function mostrarNumero()
{
	echo $numero;
}

mostrarNumero(); // Nos marca error: La variable no esta definida

// Cuando quieres trabajar con variables que estan fuera de una función tienes que pasarlas como parámetros
function mostrarNumero2($numero)
{
	echo $numero;
}

mostrarNumero2($numero);

function saludo($nombre)
{
	$saludo = 'Hola' . $nombre;
	return $saludo;
}

$saludo = saludo('Kevin');

echo $saludo;

?>