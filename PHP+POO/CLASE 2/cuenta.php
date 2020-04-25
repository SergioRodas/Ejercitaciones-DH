<?php
require_once "require_classes.php";
require_once "imprimible.php";
abstract class Cuenta implements Imprimible{
  const ORIGEN_BANELCO=1;
  const ORIGEN_LINK=2;
  const ORIGEN_CAJA=3;
  const ORIGEN_SERVICIOS=4;
  const ORIGEN_LIQUIDACION_HABERES=5;
  Protected $cbu;
  Protected $balance;
  Protected $ultimoMovimiento;

  public function __construct($cbu)
  {
      $this->cbu = $cbu;
    }

  public function setCbu($cbu)
{
    $this->cbu = $cbu;
  }
  public function getCbu(){
    return $this->cbu;
  }

public function setBalance($balance){
  $this->balance = $balance;
}
public function getBalance(){
  return $this->balance;
}

public function setUltimoMovimiento($ultimoMovimiento){
  $this->ultimoMovimiento = $ultimoMovimiento;
}
public function getUltimoMovimiento(){
  return $this->ultimoMovimiento;
}
public abstract function debitar($monto, $origen);
public function acreditar($monto){
  $this->balance +=$monto;
  $funcion="Acreditó";
  $datoAdicional="Contiene descuento adicional";
  $this->actualizarFechaUltimoMovimiento($monto, $funcion, $datoAdicional);
}

public function actualizarFechaUltimoMovimiento($monto, $funcion, $datoAdicional)
{
  $this->ultimoMovimiento="$funcion $$monto, en la siguiente fecha: ".date('Y-m-d H:i:s')." ($datoAdicional).";
}
public abstract function cobrarServicios($monto);

public function mostrar(){
  return $this->balance;
}
}
