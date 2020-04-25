<?php

$Auto=[
  "Marca"=>'Audi',
  "Modelo"=>'A5',
  "Color"=>'Negro',
  "Anio"=>2016,
  "Patente"=>"DOU 777",
];
echo var_dump($Auto)."<br>";
$Auto[0]='Federico Cristalino';
echo "$Auto[0], $Auto[Marca], $Auto[Modelo], $Auto[Color], $Auto[Anio], $Auto[Patente].<br>";
$Auto[14]='La Caja Seguros';
echo "$Auto[0], $Auto[Marca], $Auto[Modelo], $Auto[Color], $Auto[Anio], $Auto[Patente], $Auto[14].<br>";
$Auto["Poliza"]=1151649717;
echo "$Auto[0], $Auto[Marca], $Auto[Modelo], $Auto[Color], $Auto[Anio], $Auto[Patente], $Auto[14], $Auto[Poliza].<br>";
$Auto["Patente"]='ASD 1234';
echo "$Auto[0], $Auto[Marca], $Auto[Modelo], $Auto[Color], $Auto[Anio], $Auto[Patente], $Auto[14], $Auto[Poliza].<br>";
$Auto[0]='Sergio Rodas';
echo "$Auto[0], $Auto[Marca], $Auto[Modelo], $Auto[Color], $Auto[Anio], $Auto[Patente], $Auto[14], $Auto[Poliza].<br>";


 ?>
