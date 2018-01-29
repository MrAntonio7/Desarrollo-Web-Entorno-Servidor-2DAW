<?php

define('x',4);

function potencia ($a, $b)
{
   $c= pow($a, $b);
   return $c;
}

echo "<table border=1>";
for ($n1=1; $n1<=x; $n1++)
{
   echo "<tr>";
   for ($n2=1; $n2<=x; $n2++)
      echo "<td>". potencia($n1,$n2). "</td>";
   echo "</tr>";
}
echo "</table>";

?>
