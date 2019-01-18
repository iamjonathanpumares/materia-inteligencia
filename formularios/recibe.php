<?php 

echo '<pre>';
var_dump($_GET);
echo '</pre>';

$nombre = $_POST['nombre'] ?? null;

echo $nombre;

?>