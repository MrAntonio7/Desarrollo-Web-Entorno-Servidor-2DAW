<?php
$contador = (isset($_POST["contador"])) ? $_POST["contador"] +1 : 1;
echo "<br> El numero de operaciones es:  $contador <br><br>" ;
$num1=0;
if (!empty($_POST['num1'])){
$num1=$_POST['num1'];
}

$num2=0;
if (!empty($_POST['num2'])){
$num2=$_POST['num2'];
}

$calculo=$_POST['operacion'];

if ($calculo ==  "suma")
{$sol = $num1 + $num2;
echo "La suma de $num1 y $num2 es $sol";}
elseif ($calculo ==  "resta")
{$sol = $num1 - $num2;
echo "La resta de $num1 y $num2 es $sol";}
elseif ($calculo ==  "multiplicar")
{$sol = $num1 * $num2;
echo "La multiplicacion de $num1 y $num2 es $sol";}
else
{$sol = $num1 / $num2;
echo "La division de $num1 y $num2 es $sol";}
?>
