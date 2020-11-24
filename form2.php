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
  Formulario
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>

<form action="form_respuesta2.php" method="POST"> <!-- donde lo queremos mandar  -->

<p>Frutas:</p>
<p><input type="radio" name="frutas" value="manzana"><label for="frutas">Manzana</label></p>
<p><input type="radio" name="frutas" value="pera"><label for="frutas">Pera</label></p>
<p><input type="radio" name="frutas" value="naranja"><label for="frutas">Sandia</label></p>

<p><input type="hidden" name="id" value="7474"></p>

<p><input type="submit" name="enviar" value="Enviar"></input></p>

</form>

</body>

<footer>
</footer>

</html>
