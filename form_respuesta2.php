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
print "<pre>";
print_r($_POST);
print "</pre>";

if(isset($_POST['tipo'])){ 
  $frutas = $_POST["tipo"];
  print "<img src=\"../img/tipo/$tipo.svg\" width='50px' height=50px'>";
}

?>

</body>

<footer>
</footer>

</html>