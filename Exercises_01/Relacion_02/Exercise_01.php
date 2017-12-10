<?php
function bisiesto($anyo) {
  return (($anyo % 4 == 0) && (($anyo % 100 != 0) || ($anyo % 400 == 0)));
}
if (bisiesto(1900)) {
  echo 'Es bisiesto';}
  else {
    echo 'No es bisiesto';
  }

?>
