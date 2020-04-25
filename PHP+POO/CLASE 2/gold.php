<?php
require_once 'require_classes.php';
class Gold extends Cuenta {

public function debitar($monto,$origen){
  if ($origen == self::ORIGEN_LINK)  {
    $monto *= 1.05;
  }
  $this->balance -= $monto;
  $funcion="Debitó";
  $datoAdicional="Importe adicional incluido";
  $this->actualizarFechaUltimoMovimiento($monto, $funcion, $datoAdicional);
 }
 public function acreditar($monto){
   if ($monto <25000){
     $monto *= 0.97;
   }
   parent::acreditar($monto);
 }
 public function cobrarServicios($monto){
   $this->debitar($monto,Cuenta::ORIGEN_SERVICIOS);
 }
}
