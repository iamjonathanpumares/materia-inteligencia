<?php

/* Funciones útiles para el manejo de rutas
*/

/* La función pathinfo() nos devuelve información acerca de la ruta de un archivo, recibe como primer parámetro la ruta a analizar, como segundo parámetro (opcional) puede recibir cualquiera de las siguientes constantes:

PATHINFO_BASENAME: nos devuelve el nombre del archivo con su extensión
PATHINFO_DIRNAME: nos devuelve el directorio padre del archivo
PATHINFO_EXTENSION: nos devuelve la extensión del archivo
PATHINFO_FILENAME: nos devuelve el nombre del archivo sin la extensión
*/ 

echo pathinfo('carpeta1/carpeta2/archivo.php', PATHINFO_FILENAME);

/* La función glob() nos permite buscar coincidencias de nombres de ruta con un patrón, recibe como primer parámetro el patrón a buscar, como segundo parámetro puede recibir un flag como GLOB_BRACE para extender la busqueda a varias extensiones
*/

// Buscar todos los archivos con terminación .php dentro del directorio actual
$resultados = glob('*.php');
echo '<pre>';
var_dump($resultados);
echo '</pre>';

// Buscar todos los archivos con terminación .php y .txt dentro del directorio actual
$resultados = glob('*.{php,txt}', GLOB_BRACE);
echo '<pre>';
var_dump($resultados);
echo '</pre>';

/* La función basename() nos devuelve solamente el nombre del archivo junto con su extensión
*/
echo basename('carpeta1/carpeta2/archivo.php') . '<br>';

/* La función dirname() nos devuelve el directorio padre de la ruta
*/
echo dirname('carpeta1/carpeta2/archivo.php');

?>