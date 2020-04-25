<?php

$animales=['León', 'Gato Montés', 'Cocodrilo', 'Lagarto', 'Ballena'];
echo var_dump($animales)."<br>";
$animales[]='Cuis';
$animales[]='Rinoceronte';
echo var_dump($animales)."<br>";
echo "Me gustan los animales:$animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6].<br>";
$animales[0]='Tigre';
echo "Me gustan los animales:$animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6].<br>";
$animales[100]='Canguro';
echo "Me gustan los animales:$animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6],  $animales[100].<br>";
$animales[16]='Rata española';
echo "Me gustan los animales:$animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6],  $animales[100], $animales[16].<br>";

 ?>
