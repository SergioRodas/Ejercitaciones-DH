<?php
require_once "require_classes.php";

$cliente1 = new Persona(
	'Agustin',
	'Morelli',
	32568965,
	'1956-01-21',
	'dpgover@gmail.com',
	'sthshst',
	new Classic('05869584-75569865471253')
);
$cliente2 = new Multinacional(
	20534672182,
	'ChantanderMar',
	'chantander@mar.com',
	'chantanMar',
	new Black('05811184-75569222471253')
);
echo $cliente2->mostrar(). '<br/>';
$cliente1->getCuenta()->acreditar(1000);
echo $cliente1->getCuenta()->mostrar() . '<br/>';
$cliente1->cobrarServicios();
echo $cliente1->getCuenta()->mostrar() . '<br/>';
$cliente1->getCuenta()->debitar(100, Cuenta::ORIGEN_BANELCO);
echo $cliente1->getCuenta()->mostrar() . '<br/>';
echo $cliente1->getCuenta()->getUltimoMovimiento(). '<br/>';
$cliente2->getCuenta()->acreditar(1000000);
$cliente2->liquidarHaberes($cliente1,5000);
echo $cliente1->getCuenta()->mostrar() . '<br/>';
echo $cliente2->getCuenta()->mostrar() . '<br/>';
