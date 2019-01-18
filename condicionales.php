<?php 

/* Las condicionales nos permiten tomar decisiones en base a condiciones que nosotros establecemos
*/

// if (condicion)
// {
// 	// Instrucciones
// }

/* Operadores de comparación:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

*/

/* Operadores lógicos:

&& - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condición
xor - Evalua que se cumpla una y solo una condición

*/

$edad = 15;

if ($edad >= 18)
{
	echo '<h1>Bienvenido</h1>';
}

if ($edad < 18)
{
	echo '<h1>Eres menor de edad</h1>';
}

?>