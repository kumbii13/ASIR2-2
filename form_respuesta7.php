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

/** NOMBRE APELLIDOS */
if (($_POST['nombre']) && ($_POST['apellidos'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    print "<p>Nombre: $nombre.</p>";
    print "<p>Apellidos: $apellidos.</p>";
}

      else { if ($_POST['nombre'] == "") {
      print "<p>Falta el nombre.</p>";}

      if ($_POST['apellidos'] == "") {
      print "<p>Faltan los apellidos</p>";}
      }

/** EDAD */     
$edad = 0;
      for ($i = 1; $i < 6; $i++) {
          if ($i % 2 == 0) {
              $edad += 1;
          }
      }          
    print "<p>Edad: $edad</p>";

/** PESO */
if ($_POST['peso']) {
    $peso = $_POST['peso'];
    print "<p>Peso: $peso KG</p>";
  }

      else {
          print "<p>Falta por introducir el peso.</p>";
      }

/** GENERO */
if(isset($_POST['genero'])){ 
  $genero = $_POST['genero'];
  print "<p>Genero: $genero</p>";
}
    else {
     print "<p>Falta por introduccir el genero</p>";}

/** ESTADO CIVIL */
if (isset($_POST['estadocivil'])){
  $estadocivil = $_POST['estadocivil'];
  print "<p>Estado civil: $estadocivil</p>";
}
    else {
    print "<p>Falta por seleccionar un estado civil.</p>";} 

/** ESTADO CIVIL */
if (isset($_POST['aficiones'])){
  $aficiones = $_POST['aficiones'];
  print "<p>Aficiones: $aficiones</p>";
}
    else {
    print "<p>Ninguna de las opciones.</p>";} 
    
?>

</body>

<footer>
</footer>

</html>