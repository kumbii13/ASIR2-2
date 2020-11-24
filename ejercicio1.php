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
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

<?php

  $vidas = 5;
  $nombre = "Unai";

  print '<p>Hola'.$nombre.'</p>';
  print "<p>Tienes $vidas vidas. </p>";
  
  print "<p>La variable se especifica así $nombre </p>";
  print "<p>La variable se especifica así \$nombre </p>";
  print "<p>La variable se 'especifica' así $nombre </p>";
  print "<p>La variable se \"especifica\" así $nombre </p>";

?>

  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
