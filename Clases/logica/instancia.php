<?php

    require '../class/vehiculo.php';
    
    $auto = new Vehiculo("Renault","Blanco","34E456F76C4","1234567890");

    echo $auto->marca;

    $venta = $auto->valorVenta(16000000,20);
    $auto->setPropietario("EL DIFLEZ");

    echo "<br> Felicidades ".$auto->getPropietario()." usted es el propietario del vehiculo".$auto->marca." que tiene un valor de venta de:<b>".$venta;
?>