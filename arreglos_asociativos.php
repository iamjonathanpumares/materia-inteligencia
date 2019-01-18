<?php 

/* Los arreglos asociativos nos permiten acceder a los valores mediante cadenas
*/

$persona = array('nombre' => 'Jonathan', 'apellido' => 'Pumares', 'telefono' => '9811234567', 'edad' => 15);

// Acceder a los valores del arreglo
echo $persona['nombre'] . '<br>';
echo $persona['apellido'] . '<br>';
echo $persona['telefono'] . '<br>';
echo $persona['edad'] . '<br>';

?>