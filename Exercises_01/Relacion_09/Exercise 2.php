<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <TITLE>Validación de formularios</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
if(isset($texto)){
   $texto = $_REQUEST['texto'];
   $donde = $_REQUEST['donde'];
   $genero = $_REQUEST['genero'];
   $buscar = $_REQUEST['buscar'];
}

   $error = false;
   if (isset($buscar))
   {

      if (trim($texto) == "")
      {
         $errores["texto"] = "¡Debe introducir el texto de busqueda!";
         $error = true;
      }
      else
         $errores["texto"] = "";
   }


   if (isset($buscar) && $error==false)
   {
      print ("<H1>Validación de formularios. Resultados del formulario</H1>\n");
      print ("<P>Estos son los datos introducidos:</P>\n");
      print ("<UL>\n");
      print ("   <LI>Texto de búsqueda: $texto\n");
      print ("   <LI>Buscar en: $donde\n");
      print ("   <LI>Género: $genero\n");
      print ("</UL>\n");
      print ("<P>[ <A HREF='ejercicio5.php'>Nueva búsqueda</A> ]</P>\n");
   }
   else
   {
?>

<H1>Validación de formularios</H1>

<H2>Búsqueda de canciones</H2>

<FORM CLASS="borde" ACTION="Exercise 2.php" METHOD="POST">

<P><LABEL>Texto a buscar:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="texto"

<?PHP
   if (isset($buscar))
      print ("VALUE='$texto'>\n");
   else
      print (">\n");
   if (isset($errores) && $errores["texto"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["texto"] . "</SPAN>");
?>

</P>

<P><LABEL>Buscar en:</LABEL>
<INPUT TYPE="RADIO" NAME="donde" VALUE="titulo">Títulos de canción
<INPUT TYPE="RADIO" NAME="donde" VALUE="album">Nombres de álbum
<INPUT TYPE="RADIO" NAME="donde" VALUE="ambos" CHECKED>Ambos campos</P>

<P><LABEL>Género musical:</LABEL>
<SELECT NAME="genero">
   <OPTION SELECTED>Todos
   <OPTION>Acústica
   <OPTION>Banda Sonora
   <OPTION>Blues
   <OPTION>Electrónica
   <OPTION>Folk
   <OPTION>Jazz
   <OPTION>New Age
   <OPTION>Pop
   <OPTION>Rock
</SELECT></P>

<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>

</FORM>

<?PHP
   }
?>

</BODY>
</HTML>
