<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '')  && (isset($_POST['email'])) && ($_POST['email'] != '')&& (isset($_POST['comentario'])) && ($_POST['comentario'] != '')) {
 
    include "modelos/modelo.php";
    $nuevo = new Comentario();
    $asd = $nuevo->setComentario($_POST['nombre'], $_POST['email'],$_POST['comentario']);
}
?>
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
                <p class="lead">Inserta tu comentario sobre la página <br/></p>
            </header>
            <div class="row">
                <div class="col-lg-6">
 
                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nuevo comentario</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control"/>   <br> 
                        Email: <input type="text" name="email" class="form-control"/>     <br> 
                        Comentario: <textarea type="text" name="comentario" class="form-control"></textarea>  <br>
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de comentarios</h3>
                    <a href="controladores/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de comentarios</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                DWES - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
