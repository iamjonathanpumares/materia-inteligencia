<?php 

/* Operadores Aritméticos:

+ Suma
- Resta
* Multiplicación
/ División

*/

$numero = 10;
$numero2 = 5;

$resultado = $numero + $numero2;
echo $resultado . '<br>'; // 15

/* Operadores de asignación

=
+=
-=
*=
/=

*/

$numero = 10;

// $resultado = $numero + 7;
$numero += 7;
$numero = $numero + 7;
echo $numero; // 7

/* Operadores de Comparación:

==
=== - Compara el valor y el tipo de dato
!=, <>
!==
>
<
>=
<=

*/

$numero = '10';

if ($numero === 10) // false
{
	echo 'Es igual' . '<br>';
}
else
{
	echo 'Es diferente' . '<br>';
}

/* Operadores Lógicos:

and, &&
or, ||
xor
!

*/

$numero = 12;

if ($numero >= 10 && $numero <= 12)
{
	echo 'El número esta entre 10 y 20' . '<br>';
}

/* Operadores de Incremento / Decremento

++$x
$x++
--$x
$x--

*/

$numero = 12;

echo $numero++ . '<br>';
// $numero = $numero + 1;
echo $numero;

/* Operadores de Cadenas:

.
.=

*/

$texto = 'Cadena de Texto ';
$texto2 = 'Una segunda Cadena de Texto';

$texto3 = $texto . $texto2;
echo $texto3;

?>