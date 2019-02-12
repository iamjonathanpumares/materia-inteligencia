<?php

namespace App; 

class Soldado extends Unidad
{
	public function atacar($oponente)
	{
		show("{$this->name} dispara balas hacia $oponente");
	}
}
