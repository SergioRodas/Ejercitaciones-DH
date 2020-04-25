<?php
require_once 'require_classes.php';
/**
 *
 */
class Persona extends Cliente implements Imprimible
{
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass, Cuenta $cuenta){
    parent::__construct($cuenta,$email,$pass);
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;

  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;

  }
  public function cobrarServicios(){
    
    /*if($this->cuenta instanceof Classic){
      $this->cuenta->debitar(100, Cuenta::ORIGEN_SERVICIOS)
    }*/
    $monto = strlen($this->apellido)*10; 
    $this->cuenta->cobrarServicios($monto);
  }
  public function mostrar(){
    return $this->nombre." ". $this->apellido;
  }
}

