<html>
<head>
<title>Pagina 2</title>
</head>
<body>

<?php
class Comentario{
  var $ar = "datos.txt";
  var $nombre = 'nombre';
  var $comentario = 'comentarios';

  function escribir(){
    $f = fopen($this -> ar,"a") or die("Problemas en la creacion");
    fputs($f,"Los datos se guardaron correctamente.");
    fputs($f,"\n");
    fputs($f,"--------------------------------------------------------");
    fputs($f,"\n");
    fputs($f,"nombre: ");
    fputs($f,$_REQUEST[$this -> nombre]);
    fputs($f,"\n");
    fputs($f,"comentario: ");
    fputs($f,$_REQUEST[$this -> comentario]);
    fputs($f,"\n");
    fputs($f,"--------------------------------------------------------");
    fputs($f,"\n");
    fclose($f);
    echo "Los datos se guardaron correctamente.";
  }
};

$c = new Comentario();
$c -> escribir();

?>

</body>
</html>