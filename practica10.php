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

$numero_datos = rand(1,10);
$maximo=0;

for($contador=1; $contador<=$numero_dados; $contador++){
  $dado = rand(1,6);
  if($dado > $maximo){
    $maximo = $dado;
  }
  print "<img src=\"img/dados/$dado.svg\">";
}
print "El máximo es $maximo";
  
?>
  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>
