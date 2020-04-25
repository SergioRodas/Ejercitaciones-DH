<?php

$numeroMagico=7;
function mayor (int $num1, int $num2, int $num3=null){

  if ($num3==null) {
    global $numeroMagico;
    $num3=$numeroMagico;
  }
  if($num1>$num2&&$num3){
    return $num1;
}  else if($num2>$num3){
        return $num2;
}   else{
      return $num3;
}
}
echo mayor(3,4)."<br>";

function tabla(int $base, int $limite=null){
  if($limite==null){
    global $numeroMagico;
    $limite=$numeroMagico;
  }
for($N=$base;$N<=$limite;$N++){
  echo $N;
}
}
echo tabla(1)."<br>";


 ?>
