<?php 

/* Funciones útiles para cadenas de texto

*/

$texto = '<h1>Hola</h1><br>';

// Convierte los caracteres especiales en entidades HTML
echo htmlspecialchars($texto);

$texto = 'Hola  ';

// Elimina los espacios en blanco que estan al inicio y al final de una cadena
echo trim($texto) . '<br>';

// Nos devuelve el tamaño de caracteres de una cadena
echo strlen($texto) . '<br>';

$texto = 'Hola culebrita';

// Nos devuelve parte de una cadena
echo substr($texto, 1, 2) . '<br>';

// Convierte la cadena a mayusculas
echo strtoupper($texto) . '<br>';

// Convierte la cadena a minusculas
echo strtolower($texto) . '<br>';

echo strpos($texto, 'a') . '<br>';

?>