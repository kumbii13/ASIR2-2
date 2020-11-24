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

  $aleatorio = rand(1,6);
  print "<p>Valor aleatorio entre 1 y 6 = $aleatorio</p>";

?>

  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
