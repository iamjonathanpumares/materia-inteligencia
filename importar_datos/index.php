<?php

require 'funciones.php';

$conexion = conexion();

$errores = '';
$success = '';

// Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Se obtiene el archivo
	$archivo_csv = $_FILES['archivo_csv'];
	echo '<pre>';
	var_dump($archivo_csv);
	echo '</pre>';
	// Comprobar si el usuario subio un archivo
	if ($archivo_csv['error'] == UPLOAD_ERR_NO_FILE) // No se subio ningún archivo
	{
		$errores .= 'No se subio ningún archivo. <br>';
	}
	else if ($archivo_csv['error'] == UPLOAD_ERR_OK) // No hay error, el archivo se subio correctamento
	{
		// Comprobar si el archivo subido es de tipo CSV
		$extension = pathinfo($archivo_csv['name'], PATHINFO_EXTENSION);

		if ($extension != 'csv')
		{
			$errores .= 'El tipo de archivo no es CSV. <br>';
		}
	}

	if ($errores == '')
	{
		// Importar los datos
		$fila = 1;
		if (($gestor = fopen($archivo_csv['tmp_name'], "r")) !== FALSE) {
		    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
		    	$nombres = $datos[0];
		    	$apellidos = $datos[1];
		    	$email = $datos[2];
		    	$statement = $conexion->prepare('
		    		insert into alumnos(nombres, apellidos, email)
		    			values(:nombres, :apellidos, :email)
		    	');
		    	$statement->execute(array(
		    		':nombres' => $nombres,
		    		':apellidos' => $apellidos,
		    		':email' => $email
		    	));
		    }
		    fclose($gestor);
		    $success .= 'Archivo CSV cargado con éxito. <br>';
		}
	}
} 

require 'index.view.php';

?>