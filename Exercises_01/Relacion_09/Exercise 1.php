<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <TITLE>Subida de ficheros</TITLE>
      <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP

   if (isset($_REQUEST['enviar']))
   {

?>

<H1>Subida de ficheros. Resultados del formulario</H1>

<H2>Resultado de la inserción de nueva noticia</H2>

<?PHP

      $titulo = $_REQUEST['titulo'];
      $texto = $_REQUEST['texto'];
      $categoria = $_REQUEST['categoria'];

      $errores = "";
      if (trim($titulo) == "")
         $errores = $errores . "   <LI>Se requiere el título de la noticia\n";
      if (trim($texto) == "")
         $errores = $errores . "   <LI>Se requiere el texto de la noticia\n";

      $copiarFichero = false;

      if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
      {
         $nombreDirectorio = "img/";
         $nombreFichero = $_FILES['imagen']['name'];
         $copiarFichero = true;


         $nombreCompleto = $nombreDirectorio . $nombreFichero;
         if (is_file($nombreCompleto))
         {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
         }
      }

      else if ($_FILES['imagen']['error'] == UPLOAD_ERR_FORM_SIZE)
      {
      	 $maxsize = $_REQUEST['MAX_FILE_SIZE'];
         $errores = $errores . "   <LI>El tamaño del fichero supera el límite permitido ($maxsize bytes)\n";
      }

      else if ($_FILES['imagen']['name'] == "")
         $nombreFichero = '';

      else
         $errores = $errores . "   <LI>No se ha podido subir el fichero\n";


      if ($errores != "")
      {
         print ("<P>No se ha podido realizar la inserción debido a los siguientes errores:</P>\n");
         print ("<UL>\n");
         print ($errores);
         print ("</UL>\n");
         print ("<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>\n");
      }
      else
      {

         if ($copiarFichero)
            move_uploaded_file ($_FILES['imagen']['tmp_name'],
            $nombreDirectorio . $nombreFichero);

         print ("<P>La noticia ha sido recibida correctamente:</P>\n");
         print ("<UL>\n");
         print ("   <LI>Título: $titulo\n");
         print ("   <LI>Texto: $texto\n");
         print ("   <LI>Categoría: $categoria\n");
         if ($copiarFichero)
            print ("   <LI>Imagen: <A TARGET='_blank' HREF='" . $nombreDirectorio . $nombreFichero . "'>" . $nombreFichero . "</A>\n");
         else
            print ("   <LI>Imagen: (no hay)\n");
         print ("</UL>\n");

         print ("<P>[ <A HREF='Exercise 1.php'>Insertar otra noticia</A> ]</P>\n");
      }
   }
   else
   {

?>

<H1>Subida de ficheros</H1>

<H2>Insertar nueva noticia</H2>

<FORM CLASS="borde" ACTION="Exercise 1.php" METHOD="POST" ENCTYPE="multipart/form-data">


<P><LABEL>Título: *</LABEL>
<INPUT TYPE="TEXT" NAME="titulo" SIZE="50" MAXLENGTH="50"></P>

<P><LABEL>Texto: *</LABEL>
<TEXTAREA COLS="45" ROWS="5" NAME="texto"></TEXTAREA></P>


<P><LABEL>Categoría:</LABEL>
<SELECT NAME="categoria">
   <OPTION SELECTED>promociones
   <OPTION>ofertas
   <OPTION>costas
</SELECT></P>


<P><LABEL>Imagen:</LABEL>
<INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
<INPUT TYPE="FILE" SIZE="44" NAME="imagen"></P>


<P><INPUT TYPE="SUBMIT" NAME="enviar" VALUE="Insertar noticia"></P>

</FORM>

<P>NOTA: los datos marcados con (*) deben ser rellenados obligatoriamente</P>

<?PHP
   }
?>

</BODY>
</HTML>
