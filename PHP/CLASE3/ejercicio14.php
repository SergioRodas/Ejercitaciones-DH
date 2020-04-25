<?php

$ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

        "Francia" => ["Paris", "Nantes", "Lyon"],

        "Italia" => ["Roma", "Milan", "Venecia"],

        "Alemania" => ["Munich", "Berlin", "Frankfurt"]

];
foreach ($ceu as $país => [$provincia1, $provincia2, $provincia3]) {
  echo "Las ciudades de $país son:<br> <li>$provincia1<br> <li>$provincia2<br> <li>$provincia3.<br>";
}

 ?>
