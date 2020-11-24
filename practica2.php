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
  <p>Actualice la página para mostrar un nuevo número.</p>

<?php

  $rojo = rand(0,255);
  $verde = rand(0,255);
  $azul = rand(0,255);
  print "<p>Valor aleatorio color rojo = $rojo</p>";
  print "<p>Valor aleatorio color verde = $verde</p>";
  print "<p>Valor aleatorio color azul = $azul</p>";

?>

  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
