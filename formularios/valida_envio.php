<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	echo 'Se enviaron los datos por POST';
}
else
{
	echo 'Se enviaron los datos por GET';
}

if (isset($_POST['submit-formulario']))
{
	echo 'Se han enviado los datos correctamente';
}

?>