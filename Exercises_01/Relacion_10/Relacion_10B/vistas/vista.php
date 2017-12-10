<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BD con MVC</title>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>BD con MVC</h1>
                <hr/>
                <p class="lead">Inserta tu comentario sobre la página<br/></p>
            </header>
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de comentarios</h3>
                <table class="table">
                    <tr>
                        <td><strong>NOMBRE</strong></td>
                        <td><strong>EMAIL</strong></td>
                        <td><strong>COMENTARIO</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["email"]; ?></td>
                            <td><?php echo $datos[$i]["comentario"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                DWES - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
