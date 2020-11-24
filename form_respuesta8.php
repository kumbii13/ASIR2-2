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



if($_REQUEST["temperatura"] != "" && is_numeric($_REQUEST["temperatura"])){
   if($_REQUEST["tipo"] == "Celsius" && $_REQUEST["temperatura"] > -273.15){
      $temperatura = $_REQUEST["temperatura"];
      $f = (($temperatura * 1.8)+32);
      $def = round($f,2);
      print "<p>".$def." F</p>";
   }else if($_REQUEST["tipo"] == "Farenheit" && $_REQUEST["temperatura"] > -459.67){
    $temperatura = $_REQUEST["temperatura"];
    $c = (($temperatura - 32)/1.8);
    $def = round($c,2);
    print "<p>".$def." C</p>";
 }else{
  print "<p>El valor introducido no es valido<p>";
 }

}else{
  print "<p>Debes introducir un valor<p>";
 
  
}

?>

</body>

<footer>
</footer>

</html>