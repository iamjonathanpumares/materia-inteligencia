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
		echo $e->getMessage();
		exit();
	}
	

}

function traitPermisos($permisos)
{
	$result = [];
	foreach ($permisos as $modulo => $acciones)
	{
		foreach ($acciones as $accion => $value)
		{
			$result["$modulo.$accion"] = true;
		}
	}

	return $result;
}

function permission_required($permiso)
{
	$conexion = conexion();

	$statement = $conexion->prepare('
		select *
		from usuarios
		where usuario = :usuario
	');
	$statement->execute(array(
		':usuario' => $_SESSION['usuario']
	));

	$result = $statement->fetch();

	if ($result === false)
	{
		return false;
	}

	$permisos = $result['permisos'];

	$permisos = json_decode($permisos, true);

	return array_key_exists($permiso, $permisos);
}

?>