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

<?php

print "<pre>"; print_r($_REQUEST); print "</pre>\n";

if($_REQUEST["ancho"] != "" && $_REQUEST["borde"] != "" && $_REQUEST["color"] != ""){
  $ancho = $_REQUEST["ancho"];
  $borde = $_REQUEST["borde"];
  $color = $_REQUEST["color"];
  print '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
  width="500" height="500" viewBox="-10 -10 335 169" style="background-color: white;" font-family="sans-serif">
  <rect x="0" y="0" width="'.$ancho.'px" height="'.$borde.'px" fill="'.$color.'" style="stroke-width:3;stroke:rgb(0,0,0)" />
  </svg>';
  
}
else{
  print "<p>Faltan valores</p>";
}

?>

</body>

<footer>
</footer>

</html>
