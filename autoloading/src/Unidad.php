<?php

namespace App;

abstract class Unidad
{
	protected $vida = 40;
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function move($destino)
	{
		show("{$this->name} se mueve hacia $destino");
	}
	abstract public function atacar($oponente);
}
