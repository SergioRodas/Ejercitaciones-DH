<?php
require_once 'require_classes.php';
class  Platinum extends Cuenta {

public function debitar($monto,$origen){
  if ($this->balance <5000 && $origen != self::ORIGEN_SERVICIOS ) {
    $monto *= 1.05;
  }
  $this->balance -= $monto;
  $funcion="Debitó";
  $datoAdicional="Importe adicional incluido";
  $this->actualizarFechaUltimoMovimiento($monto, $funcion, $datoAdicional);

}
public function cobrarServicios($monto){
  $this->debitar($this->balance/10,self::ORIGEN_SERVICIOS);
}
}
 ?>
