<?php

    include_once 'conexion.php';

    //Lee lo que recibe
    $id = $_GET['id'];

    //DELETE MYSQL (lo que tiene que eliminar)
    $sql_delete = "DELETE FROM colores WHERE id=?";

    $sentencia_sql = $gbd -> prepare($sql_delete);
    $sentencia_sql ->execute(array($id));

    header("location:index.php");
?>
