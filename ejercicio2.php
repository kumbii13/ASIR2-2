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
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

<?php

  $a = 10;
  $b = 5;
  $suma = $a + $b;

  print "\t<p>Suma: $a + $b = $suma</p>\n";
  print "<p>Suma: $a + $b = ".$suma."</p>";
  print "<p>Suma: $a + $b = $a + $b</p>";
  print "<p>Suma: $a + $b = ".($a + $b)."</p>";

  $texto1 = "¡Hola!";
  $texto2 = "¿Qué tal?";
  $texto3 = "¡Adios!";

$textoTotal = $texto1." ".$texto2." ".$texto3;

print "<h1>$textoTotal</h1>";

$ancho=3;
print "<p>La mesa tiene una anchura de ".$ancho."m.</p>";
print "<p>La mesa tiene una anchura de {$ancho}m.</p>";

$alumnos = ["Patxi", "Jon", "Jacinta", "Aurelio"];
print "<p>El primer alumno es: $alumnos[0]</p>";
print "<p>El cuarto alumno es: $alumnos[3]</p>";

$cuadrados = [3 =>9, 5=> 25, 10 => 100];
print "<p>El cuadrado de 3 es $cuadrados[3]</p>";
print "<p>El cuadrado de 5 es $cuadrados[5]</p>";
print "<p>El cuadrado de 10 es $cuadrados[10]</p>";

$edades = ["Irati"=>34, "Joseba"=>32, "Jon Ander"=>22, "Kelya"=>18];

$edadIrati = $edades["Irati"];
print "<p>La edad de Irati es $edades[Irati]</p>";

$aleatorio = rand(1,50);
print "<p>Valor aleatorio entre 1 y 50 = $aleatorio</p>";

$a = 5;
$b = 7;

  if($a>5){
    print "<p>A es mayor que 5.</p>\n";
  }

  else{
    print "<p>A no es mayor que 5.</p>\n";
  }

  if($a>5 or $a<7){
    print "<p>A es mayor que 5.</p>\n";
  }

  else{
    print "<p>A no es mayor que 5.</p>\n";
  }

  if($a == true){
    print "<p>A es cierto: 5.</p>\n";
  }

  if ($a==5) {
      print "<p>A no es 5.</p>\n";
  }  
  elseif ($a<7) {
    print "<p>A es menor que 7.</p>\n";
  }
  else {
    print "<p>A no es menor que 7.</p>\n";
  }

  for ($contador =1; $contador <=6; $contador++) {
    print"<img src='img/dados/2.svg>";
  }

  /** for para repetir (++ aplica +1 en cada vuelta) **/
  for ($contador =0; $contador <3; $contador++) {
      print"<p>El valor es $contador</p>";
  }

?>

  <footer>
    <p>Unai Combarro</p>
  </footer>
</body>
</html>