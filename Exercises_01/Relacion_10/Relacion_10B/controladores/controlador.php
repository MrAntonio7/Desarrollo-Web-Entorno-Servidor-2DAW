<?php
    require_once("../modelos/modelo.php");
    $c = new Comentario();
    $datos = $c->getComentario();
    require_once("../vistas/vista.php");
?>
