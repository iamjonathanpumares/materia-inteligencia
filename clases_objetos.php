<?php 

// $firstName = 'Jonathan';
// $lastName = 'Pumares';
// $fullName = "$lastName $firstName <br>";

// echo $fullName;

// $firstName2 = 'Esteban';
// $lastName2 = 'Kantún';
// $fullName2 = "$lastName2 $firstName2 <br>";

// echo $fullName2;

class Persona
{
	// Propiedades
	private $firstName; // public
	private $lastName;

	// Constructor
	function __construct($firstName, $lastName)
	{
		echo 'Estoy creando un objeto de la clase Persona<br>';
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	// Métodos
	function fullName()
	{
		echo $this->firstName . ' ' . $this->lastName . '<br>';
	}
}

// Creando un objeto (Instancia de una clase)
$persona = new Persona('Jonathan', 'Pumares');
// Asignando valores a las propiedades del objeto
$persona->firstName = 'Kevin';
$persona->lastName = 'Ortiz';
$persona->fullName();

// $persona2 = new Persona();
// $persona2->firstName = 'Esteban';
// $persona2->lastName = 'Kantún';
// $persona2->fullName();

?>