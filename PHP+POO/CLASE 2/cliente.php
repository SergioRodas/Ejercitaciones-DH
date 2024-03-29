<?php
require_once 'require_classes.php';
//Defino variables privadas para la clase Cliente

abstract Class Cliente{
  Protected $email;
  Protected $pass;
  Protected $cuenta;
//Creo una función constructora con sus parámetros necesarios

  public function __construct(Cuenta $cuenta, $email,$pass){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }
  public function getCuenta(){
    return $this->cuenta;
  }
  public abstract function cobrarServicios();

  }
