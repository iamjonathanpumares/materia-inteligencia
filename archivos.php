<?php 

/* Manipulación de archivos: Crear, abrir, leer y escribir archivos
*/

/* La función file_exists() nos permite comprobar si un archivo existe, el parámetro que recibe es el nombre del archivo
*/
$resultado = file_exists('documento.txt');
// var_dump($resultado);

/* La función file_get_contents() nos permite leer el contenido de un archivo, recibe como parámetro el nombre del archivo que queremos leer
*/
echo file_get_contents('documento.txt');

/* La función file_put_contents() nos permite agregar información a un archivo, recibe dos parámetros, el primero es el nombre del archivo y el segundo es la información que queremos agregar

En caso de no existir el archivo lo crea

Le podemos pasar un tercer parámetro que es la constante FILE_APPEND para agregar contenido al final del documento
*/
file_put_contents('documento.txt', "Hola culebrita \n", FILE_APPEND);
file_put_contents('documento.txt', '');

for ($i = 1; $i <= 10; $i++)
{
	file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}

/* La función file() nos permite convertir un archivo a un arreglo en donde cada línea de nuestro archivo es un elemento del arreglo
*/
$archivo = file('documento.txt');
echo '<pre>';
var_dump($archivo);
echo '</pre>';

?>