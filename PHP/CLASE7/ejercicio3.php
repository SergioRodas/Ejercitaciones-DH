<?php

  function hashear(string $clave){
    echo $clave."<br>";
    echo md5($clave)."<br>";
    echo sha1($clave)."<br>";
    echo password_hash($clave,PASSWORD_DEFAULT)."<br>";
    echo password_hash($clave,PASSWORD_BCRYPT)."<br>";
  
  }
  echo hashear("asd");

 ?>
