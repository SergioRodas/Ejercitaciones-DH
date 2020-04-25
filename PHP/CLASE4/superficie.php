<?php

function triangulo(int $base, int $altura){
  return $base*$altura/2;
}
echo "La superficie del triángulo es de ".triangulo(6,4)." metros cuadrados.<br>";

function rectangulo(int $base, int $altura){
  return $base*$altura;
}
echo "La superficie del rectángulo es de ".rectangulo(6,4)." metros cuadrados.<br>";

function cuadrado(int $base){
  return $base**2;
}
echo "La superficie del cuadrado es de ".cuadrado(6)." metros cuadrados.<br>";

function circulo(int $radio){
  return pi()*$radio**2;
}
echo "La superficie del círculo es de ".circulo(4)." metros cuadrados.<br>";


 ?>
