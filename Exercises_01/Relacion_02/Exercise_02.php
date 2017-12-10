<?php
//1
function bisiesto($anyo) {
  return (($anyo % 4 == 0) && (($anyo % 100 != 0) || ($anyo % 400 == 0)));
}
if (bisiesto(1900)) {
  echo 'Es bisiesto';}
  else {
    echo 'No es bisiesto';
  }

//2
function LetraNIF ($dni) {
  $valor= (int) ($dni / 23);
  $valor *= 23;
  $valor= $dni - $valor;
  $letras= "TRWAGMYFPDXBNJZSQVHLCKE";
  $letraNif= substr ($letras, $valor, 1);
  return $letraNif;
  }
echo LetraNIF(20885036)
 ?>
