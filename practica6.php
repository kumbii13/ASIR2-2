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
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Unai
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>

<?php

$dado1 = rand(0,5);
  $dado2 = rand(0,5);
  
  $suma1 = $dado1 +1;
  $suma2 = $dado2 +1;

  $imagen = ["1","2","3","4","5","6"];

  print "<img src=\"img/dados/$imagen[$dado1].svg\">\n";

  print "<img src=\"img/dados/$imagen[$dado2].svg\"\n>";

  print "<h3>El resultado es: ".($suma1 + $suma2)."</h3>";
  
?>
  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
