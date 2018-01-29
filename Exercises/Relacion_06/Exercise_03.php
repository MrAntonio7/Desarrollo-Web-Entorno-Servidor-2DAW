<?php
if ($gestor = opendir('C:\xampp\htdocs\Desarrollo-Web-Entono-Servidor-2DAW\Exercises\Relacion_06')) {
    echo "Gestor de directorio: $gestor.<br />";
    echo "Entradas:<br />";

    while (false !== ($entrada = readdir($gestor))) {
        echo "$entrada<br />";
    }
    closedir($gestor);
}
?>
