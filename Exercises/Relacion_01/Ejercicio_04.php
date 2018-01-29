<?php
define("x", "Hello");
define("y", "World");
echo x." ".y;
define("x", "Hi");
echo x." ".y;
//No se puede volver a redefinir.
?>
