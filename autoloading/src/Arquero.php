<?php

namespace App;

class Arquero extends Unidad
{
	public function atacar($oponente)
	{
		show("{$this->name} dispara flechas hacia  $oponente");
	}
}
