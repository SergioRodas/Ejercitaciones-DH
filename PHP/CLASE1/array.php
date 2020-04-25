<?php

  $miArray=[];
  $miArray=["hola","chau",0,42];
$miArray=[
  0=>"hola",
  1=>"chau",
  2=>0,
  3=>42
];
echo var_dump($miArray)."<br>";
$auto=[];
$auto["color"]=["Negro","Verde"];
$auto["marca"]="Ford";
$auto["anio"]=1992;
$auto[]="Prueba";

var_dump($auto);

 ?>
