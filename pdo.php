<?php 

// $id = $_GET['id'];

try
{
	$conexion = new PDO('mysql:host=localhost;dbname=materia_inteligencia', 'root', '');
	echo 'Conexión establecida';

	// // Método Query
	// $resultados = $conexion->query("
	// 	select *
	// 	from usuarios
	// 	where id = $id
	// ");

	// foreach ($resultados as $fila)
	// {
	// 	echo $fila['id'] . '<br>';
	// 	echo $fila['usuario'] . '<br>';
	// }

	$statement = $conexion->prepare('
		insert into usuarios(usuario)
			values(:usuario)
	');
	$statement->execute(array(
		':usuario' => 'jonathan'
	));

	// $resultados = $statement->fetch();


	// echo '<pre>';
	// var_dump($resultados);
	// echo '</pre>';


}
catch(PDOException $e)
{
	echo 'Error: ' . $e->getMessage();
}

?>