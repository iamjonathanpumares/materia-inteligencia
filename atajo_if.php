<?php 

/* El operador ternario nos permite realizar una condición en una sola línea

*/

// $variable = (condicion) = <valor_verdadero> : <valor_falso>;

$edad = 15;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

echo 'Edad: ' . $edad;

?>

