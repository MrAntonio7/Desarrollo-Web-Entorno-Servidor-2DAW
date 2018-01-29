<?php
  $visitas = 0;
  if (isset ($_COOKIE["visitas"]))
      $visitas = $_COOKIE["visitas"];
  $visitas++;
  setcookie("visitas", $visitas, time() + 60 * 5, "/");
  echo "<h2>Visitas: $visitas </h2>";
?>