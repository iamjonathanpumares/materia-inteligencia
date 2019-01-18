<?php 

/* Las sentencias include y require nos permiten incluir archivos dentro de otro para poder tener nuestro código más organizado

Anotaciones de Include y Require:
1. Podemos utilizar include cuando nuestro archivo no es importante, es decir, que no sea una conexión a base de datos
*/

function suma($numero1, $numero2)
{
	return $numero1 + $numero2;
}

require 'vista.php';
include_once 'vista.php';

echo 'Hola culebrita';

?>