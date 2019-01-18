<?php 

/* La sentencia else trabaja en conjunto con if ya que si es evaluada como FALSE la sentencia else es ejecutada

La sentencia else if es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como FALSE. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del else if se evalúa como TRUE
*/

$edad = 15;

if ($edad >= 18)
{
	echo '<h1>Bienvenido</h1>';
}
else
{
	echo '<h1>Eres menor de edad</h1>';
}

$mes = 'Enero';

if ($mes == 'Diciembre')
{
	echo 'Feliz Navidad';
}
else if ($mes == 'Enero')
{
	echo 'Feliz Año Nuevo';
}
else
{
	echo 'El mes que pusiste no tiene celebración';
}

?>