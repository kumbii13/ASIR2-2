<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Unai
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  EJERCICIOS FORM
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <form action="form_respuesta4.php" method="POST"> 

    <p><label for="nombre">Nombre</label><input type="text" name="nombre"></p>
    <p><label for="primerapellido">Primer apellido</label><input type="text" name="primerapellido"></p>
    <p><label for="segundoapellido">Segundo apellido</label><input type="text" name="segundoapellido"></p>

    <p><input type="submit" name="enviar" value="Enviar"></input></p>
  </form>  

</body>

<footer>
</footer>

</html>
