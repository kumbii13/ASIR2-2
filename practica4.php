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

$rojo = rand(0,255);
$verde = rand(0,255);
$azul = rand(0,255);

/** cx: coordenada x del centro, cy: coordenada y del centro, r: radio **/
print '<p>
<svg width="100" height="100">
    <circle cx="50" cy="50" r="50" fill="rgb('.$rojo.','.$verde.','.$azul.')" /> 
  </svg>
</p>';

?>
  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
