<?php

    include_once 'conexion.php';

    //Lee lo que recibe
    $id = $_GET["id"];
    $color = $_GET["color"];
    $descripcion = $_GET["descripcion"];

    //UPDATE MYSQL (lo que tiene que ejecutar)
    $sql_update = "UPDATE colores SET color=?,
    descripcion=? WHERE id=?";

    $sentencia_sql = $gbd -> prepare($sql_update);
    $sentencia_sql -> execute(array($color,$descripcion,$id));

    header("location:index.php")
?>