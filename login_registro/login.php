<?php

session_start();

require 'funciones.php';

$conexion = conexion();

$errores = '';

// Comprobar que el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Se obtienen los datos del formulario
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	// Validar los campos
	if (!empty($usuario) && !empty($password))
	{
		// Buscar el usuario
		$statement = $conexion->prepare('
			select *
			from usuarios
			where usuario = :usuario
		');
		$statement->execute(array(
			':usuario' => $usuario
		));

		$result = $statement->fetch();

		if ($result !== false)
		{
			// Se busco al usuario
			if (password_verify($password, $result['password']))
			{
				// Que la contraseña es correcta
				$_SESSION['usuario'] = $result['usuario'];
				header('Location: contenido.php');
			}
			else
			{
				$errores .= 'Datos incorrectos <br>';
			}
		}
		else
		{
			$errores .= 'Datos incorrectos <br>';
		}
	}
	else
	{
		// Mandar error
		$errores .= 'Datos incompletos <br>';
	}
} 

require_once 'views/login.view.php';

?>