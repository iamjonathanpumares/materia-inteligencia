<?php

session_start();

require 'funciones.php';
$permisos_agrupados = require 'config/permisos.php';

if (isset($_SESSION['usuario']))
{
	header('Location: index.php');
}

$errores = ''; 

// Comprobar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Se obtienen los datos del formulario
	$usuario = filter_var(strtolower(trim($_POST['usuario'])), FILTER_SANITIZE_STRING);
	$password = trim($_POST['password']);
	$confirm_password = trim($_POST['confirm_password']);
	$permisos = (isset($_POST['permisos'])) ? $_POST['permisos'] : null;

	echo '<pre>';
	var_dump($permisos);
	echo '</pre>';

	// Validar los datos del formulario
	if (empty($usuario) or empty($password) or empty($confirm_password))
	{
		$errores .= 'Por favor, rellene todos los campos <br>';
	}
	else
	{
		// Si el usuario existe
		try
		{
			$conexion = new PDO('mysql:host=localhost;dbname=materia_inteligencia', 'root', '');

			$statement = $conexion->prepare('
				select *
				from usuarios
				where usuario = :usuario
				limit 1
			');
			$statement->execute(array(
				':usuario' => $usuario
			));

			$resultado = $statement->fetch();

			if ($resultado !== false)
			{
				$errores .= 'El usuario ' . $usuario . ' ya existe <br>';
			}

			// Comprobar si las dos contraseñas coinciden
			if ($password !== $confirm_password)
			{
				$errores .= 'Las contraseñas no coinciden <br>';
			}

			// Comprobar que el usuario tenga permisos
			if ($permisos !== null)
			{
				$permisos = traitPermisos($permisos);
				$permisos = json_encode($permisos);
			}

			if ($errores == '')
			{
				$statement = $conexion->prepare('INSERT INTO usuarios(usuario, password, permisos) VALUES(:usuario, :password, :permisos)');
				$statement->execute(array(
					':usuario' => $usuario,
					':password' => password_hash($password, PASSWORD_DEFAULT),
					':permisos' => $permisos
				));

				header('Location: login.php');
			}
		}
		catch(PDOException $e)
		{
			echo 'Error: ' . $e->getMessage();
		}
	}
}

require_once 'views/registrate.view.php';

?>