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

if($_REQUEST["tamaño"] != ""  && isset($_REQUEST["forma"]) && is_numeric($_REQUEST["tamaño"])){
  $tamaño = $_REQUEST["tamaño"];
  $forma = $_REQUEST["forma"];
  if($forma == "circulo"){
    print '<svg height="400px" width="400px">
    <circle cx="'.$tamaño.'" cy="'.$tamaño.'" r="'.$tamaño.'" fill="green"/>
    </svg> ';

  } else if ($forma == "cuadrado"){
    print '<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
    width="335" height="169" viewBox="-10 -10 335 169" style="background-color: white;" font-family="sans-serif">
    <rect x="0" y="0" width="'.$tamaño.'px" height="'.$tamaño.'px" fill="purple"/>
    </svg>';
  }

}else{
  
print "<p>Faltan valores por introduccir.</p>";

}
  
?>

</body>

<footer>
</footer>

</html>