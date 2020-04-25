<?php
require_once 'require_classes.php';
class Classic extends Cuenta {

public function debitar($monto,$origen){

switch ($origen) {
  case self::ORIGEN_LINK:
    $monto *= 1.1;
    break;
  case self::ORIGEN_BANELCO:
    $monto *= 1.05;
    break;
    case self::ORIGEN_CAJA:
    case self::ORIGEN_SERVICIOS:
    case self::ORIGEN_LIQUIDAR_HABERES:
    break;
  default:
    break;
}
$this->balance -= $monto;
$funcion="Debitó";
$datoAdicional="Importe adicional incluido";
$this->actualizarFechaUltimoMovimiento($monto, $funcion, $datoAdicional);
 }
 public function acreditar($monto){
   $monto *= 0.95;
   parent::acreditar($monto);
 }
 public function cobrarServicios($monto){
   $this->debitar(100, Cuenta::ORIGEN_SERVICIOS);
 }
}
