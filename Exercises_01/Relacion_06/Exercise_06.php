<?php
    function cuentaAtras($dia, $mes, $anyo)
    {
      $fechaActual = new DateTime();
      $fechaCumple = new DateTime($anyo.'-'.$mes.'-'.$dia);
      $diferencia = $fechaCumple->diff($fechaActual);
      $cumple = $diferencia->format('%a días, %H horas, %i minutos y %s segundos');
      echo "Te quedan $cumple para tu cumpleaños";
    }
    cuentaAtras('17','07','2018');
?>
