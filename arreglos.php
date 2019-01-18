<?php 

/* Los arreglos son variables en las que podemos almacenar múltiples valores

Caracteristicas de los arreglos:
1. Puedes almacenar diferentes tipos de datos en los arreglos
2. La primera posición de un arreglo es 0 (cero)
*/

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo', 12);

echo $semana[1] . '<br>';

// A partir de PHP 5.4
$arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// Agregar elementos al arreglo
$semana[0] = 'Chumes';

// Acceder a los elementos de un arreglo
echo $semana[0] . '<br>';
echo $semana[1] . '<br>';
echo $semana[2] . '<br>';
echo $semana[3] . '<br>';
echo $semana[4] . '<br>';
echo $semana[5] . '<br>';
echo $semana[6] . '<br>';

?>