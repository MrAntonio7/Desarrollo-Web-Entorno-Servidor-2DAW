<?php
/*Ejercicio 1*/
echo '<br />Ejericio 1<br /><br />';
$a = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
foreach ($a as $key => $value) {
  echo "$key : $value <br>";
};

for ($i = 0; $i<count($a); $i++){
  echo "$i : $a[$i] <br>";
}

/*Ejercicio 2*/
echo '<br />Ejericio 2<br /><br />';
$alumnos = ['Antonio', 'Andres', 'Manolito', 'Ezedro', 'Frani'];
$alumnos1 = array_slice($alumnos,0,3);
print_r ($alumnos1);
echo '<br />';
$alumnos2 = array_splice($alumnos,3,4);
print_r ($alumnos2);
echo '<br />';
/*Ejercicio 3*/
echo '<br />Ejericio 3<br /><br />';
echo '<table border=1>';
echo '<tr>';
$colores = [['Rojo'=>'#FF0000','Verde'=>'#00FF00','Azul'=>'#0000FF'],['Rosa'=>'#FE9ABC','Amarillo'=>'#FDF189','Malva'=>'#BC8F8F']];
foreach ($colores[0] as $key => $value){
  echo "<td bgcolor=$value> $key:$value</td>";
};
echo '</tr>';
echo '<tr>';
foreach ($colores[1] as $key => $value){
  echo "<td bgcolor=$value> $key:$value</td>";
};
echo '</tr>';
echo '</table>';
/*Ejercicio 4*/
echo '<br />Ejericio 4<br /><br />';
if (in_array('#FF88CC',$colores[0])||in_array('#FF88CC',$colores[1])){
  echo 'Existe FF88CC <br />';
}else{echo 'No existe FF88CC<br />';}
if (in_array('#FF0000',$colores[0])||in_array('#FF0000',$colores[1])){
  echo 'Existe FF0000<br />';
}else{echo 'No existe FF0000<br />';}
/*Ejercicio 5*/
echo '<br />Ejericio 5<br /><br />';
$pila = array('cinco' => 5, 'uno'=>1, 'cuatro'=>4, 'dos'=>2, 'tres'=>3);
echo '<br />';
ksort($pila);
foreach ($pila as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';
asort($pila);
foreach ($pila as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';
arsort($pila);
foreach ($pila as $key => $val) {
    echo "$key = $val\n";
}

echo '<br />';
sort($pila);
foreach ($pila as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';
rsort($pila);
foreach ($pila as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';
/*Ejercicio 6*/
echo '<br />Ejericio 6<br /><br />';
$capital = ['España'=>'Madrid','Alemania'=>'Berlin','Francia'=>'Paris'];
echo '<br />';
ksort($capital);
foreach ($capital as $key => $val) {
    echo "$key = $val\n";
}
echo '<br />';
asort($capital);
foreach ($capital as $key => $val) {
    echo "$key = $val\n";
}
/*Ejercicio 7*/
echo '<br /><br />Ejericio 7<br /><br />';
$valores = [];
$contador = 0;
for ($x=0;$x<10;$x++) {
  $num_aleatorio = rand(1,10);
  array_push($valores,$num_aleatorio);
}
print_r($valores);
foreach($valores as $key => $val){
  if ($val == 2){$contador++;}
};
echo '<br />';
echo $contador;
?>
