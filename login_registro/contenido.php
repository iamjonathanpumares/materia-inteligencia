<?php

session_start();

require_once 'funciones.php';

// Si el usuario tiene una sesión iniciada
if (!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}

// Si el usuario tiene el permiso
if (!permission_required('usuarios.eliminar'))
{
	header('Location: login.php');
}

require_once 'views/contenido.view.php';

?>