<?php

$link ='mysql:host=localhost;dbname=colores';
$usuario = 'root';
$pwd = '';

try {
    // gbd es la variable que guarda la conexión
    $gbd = new PDO($link, $usuario, $pwd);
    print "¡Conectado!";
} catch (PDOException $e){
    print "Error: ". $e->getMessage() . "<br/>";
    die();
}

?>