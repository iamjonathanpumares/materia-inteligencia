<?php

require_once 'src/helpers.php';

require_once 'vendor/autoload.php';

use App\Soldado;
use App\Arquero;

use App\Models\Usuario;

$usuarios = Usuario::all();

$soldado = new Soldado('jepumares');
$soldado->move('el norte');
$soldado->atacar('abraham');
$arquero = new Arquero('rodrigo');
$arquero->atacar('martin');
