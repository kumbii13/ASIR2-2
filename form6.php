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

<form action="form_respuesta6.php" method="REQUEST"> 

<p><label for="tamaño">Tamaño</label>
<input type="text" name="tamaño" placeholder="tamaño"></p>

<p><label for="forma">Circulo</label></p>
<select name="forma">
  <option>circulo</option>
  <option>cuadrado</option>
</select>

<p><input type="hidden" name="id" value="7474"></p>

<p><input type="submit" name="enviar" value="Enviar"></input></p>

</form>  

</body>

<footer>
</footer>

</html>
