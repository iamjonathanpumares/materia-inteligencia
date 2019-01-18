<?php 

/* Una función es un bloque de código que nosotros podemos programar para ejecutar cuantas veces queramos y en donde nosotros queramos con una sola línea de código

Anotaciones de funciones:
1. PHP cuenta con más de mil funciones
2. Nos permiten reutilizar código

Los parametros en las funciones nos permiten enviar y utilizar variables locales en una función

La sentencia return nos permite es devolver un valor desde dentro de una función hacia una variable o instrucción

Ejercicio. Realizar una función que haga el cálculo del área de un triángulo

Formula

area = base * altura / 2;
*/

// count();
// sort();
// rsort();
// var_dump();

function saludo()
{
	// Instrucciones
	echo 'Saludo!';
}

saludo();

function sumar($numero1, $numero2)
{
	$resultado = $numero1 + $numero2;
	return $resultado;
}

$resultado = sumar(10, 5);

?>