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

$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
 
if(filter_var($email1, FILTER_VALIDATE_EMAIL)){ 
    
    if ($email1 == $email2){
      print "<p>El e-mail es correcto $email1</p>";
    }else{
      print "<p>Los e-mails no coinciden</p>"; 
    }

}else{ 
    print "<p>El formato de los e-mails no es correcto</p>"; 
} 

?>

</body>

<footer>
</footer>

</html>