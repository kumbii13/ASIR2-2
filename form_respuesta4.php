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

if (($_POST['nombre']) && ($_POST['primerapellido']) && ($_POST['segundoapellido'])) {
    $nombre = $_POST['nombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];

    print "<p>El nombre es $nombre.</p>";
    print "<p>El primer apellido $primerapellido.</p>";
    print "<p>El segundo apellido es $segundoapellido.</p>";
}

else { if ($_POST['nombre'] == "") {
  print "<p>Falta el nombre.</p>";}

  if ($_POST['primerapellido'] == "") {
    print "<p>Falta el primer apellido.</p>";}

    if ($_POST['segundoapellido'] == "") {
      print "<p>Falta el segundo apellido.</p>";}
}

?>

</body>

<footer>
</footer>

</html>