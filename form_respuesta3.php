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

if(isset($_POST['background']) && isset($_POST['texto'])){
  $background = $_POST['background'];
  $texto = $_POST['texto'];

  print "<p style='color:".$texto."'>Esto es el texto</p>";

  print "<body style='background-color:".$background."'>";

} else{
  print "Sin respuesta";
}  

?>

</body>

<footer>
</footer>

</html>
