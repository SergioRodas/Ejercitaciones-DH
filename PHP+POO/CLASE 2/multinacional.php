<?php
require_once 'require_classes.php';
/**
 *
 */
class Multinacional extends Cliente implements Liquidable, Imprimible
{
  private $cuit;
  private $razonSocial;
  function __construct($cuit,$razonSocial,$email,$pass,Cuenta $cuenta)
  {
    parent::__construct($cuenta,$email,$pass);
    $this->cuit= $cuit;
    $this->razonSocial = $razonSocial;

  }
  public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  public function getCuit($cuit){
    return $this->cuit;
  }
  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial($razonSocial){
    return $this->razonSocial;
  }
  public function cobrarServicios(){
    
    /*if($this->cuenta instanceof Classic){
      $this->cuenta->debitar(100, Cuenta::ORIGEN_SERVICIOS)
    }*/
    $monto = strlen($this->razonSocial)*5; 
    $this->cuenta->cobrarServicios($monto);
  }
  public function liquidarHaberes(Persona $persona, int $monto){
    $montoDebitado =$monto+500;
    $this->cuenta->debitar($montoDebitado, Cuenta::ORIGEN_LIQUIDACION_HABERES);
    $persona->cuenta->acreditar($monto);
  }
  public function mostrar(){
   return $this->razonSocial;
 }
}

