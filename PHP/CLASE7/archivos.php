<?php
$archivo='texto.txt';
if(file_exists($archivo)){
  fopen($archivo,'a+');
} else{
  fopen($archivo,'w+');
}
;
  $ft=fopen($archivo,'w');
  for($i=0; $i<100;$i++){
  fwrite($ft,"Hola mundo! testing.\n");
  }
  fclose($ft);

$contenido=file_get_contents($archivo);
echo $contenido."<br>";
$archivo2='texto2.txt';
$fu=fopen($archivo2,'w');
fwrite($fu, 'Hola nuevamente mundo! ');
fwrite($fu, '¿Este texto pisa el anterior? ');
fwrite($fu, 'YA NO!');
fclose($fu);
 ?>
