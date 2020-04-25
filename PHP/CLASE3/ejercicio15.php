<?php

$ceu = [

        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano"=>true],

        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano"=>true],

        "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano"=>true],

        "Francia" => ["Paris", "Nantes", "Lyon", "esAmericano"=>false],

        "Italia" => ["Roma", "Milan", "Venecia", "esAmericano"=>false],

        "Alemania" => ["Munich", "Berlin", "Frankfurt", "esAmericano"=>false]

];
var_dump($ceu);
foreach ($ceu as $pais=>$ciudad) {
  if ($ciudad["esAmericano"]) {
    echo "Las ciudades de $pais son:<br>";
    foreach ($ciudad as $key => $value) {
        echo "<li>$value</li>";
      }

    }
  }





 ?>
