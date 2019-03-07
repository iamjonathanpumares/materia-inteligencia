<?php 

function conexion()
{
	try
	{
		$conexion = new PDO('mysql:host=localhost;dbname=materia_inteligencia', 'root', '');
		return $conexion;
	}
	catch (Exception $e)
	{
		echo 'Error: ' . $e->getMessage();
		exit();
	}
}

?>