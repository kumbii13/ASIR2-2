<?php

include_once 'conexion.php';

/**SELECT DESDE LA BC */
$sql_select = "SELECT * FROM colores";

$sentencia_sql = $gbd->prepare($sql_select);
$sentencia_sql ->execute();

$resultado = $sentencia_sql->fetchAll(); /**fetchAll da todos los resultados */

print_r($_POST);

if ($_POST) {
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];


    if ($color != "" && $descripcion != "") {
        $sql_insert = "INSERT INTO colores(color, descripcion) VALUES (?,?)";

        $sentencia_sql = $gbd->prepare($sql_insert);
        $sentencia_sql->execute(array($color, $descripcion));

        header("location:index.php");
    }
}

    if($_GET){
        $id = $_GET['id'];
        $sql_selectid = "SELECT * FROM colores WHERE id = ?";

        $sentencia_sql = $gbd->prepare($sql_selectid);
        $sentencia_sql->execute(array($id));

        $resultado_id = $sentencia_sql->fetch();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLORES</title>
</head>

<body>
    <table border="1">
    <?php
     foreach ($resultado as $color){/**Para cada elemento de resultado y [] los nombres de variables*/
        print "<tr style=\"background-color:$color[color]\">
        <td>$color[color]</td> 
        <td>$color[descripcion]</td>
        <td><a href=\"index.php?id=$color[id]\">&#128221</td>
        <td><a href=\"delete.php?id=$color[id]\">&#128465</td>
        </tr>";
    }
    ?>
    <table>

<?php if(!$_GET):?>
    <!-- Formulario de añadir -->
    <form action="index.php" method="POST">
        <p>
            <label for="color">Color</label>
            <input type="text" name="color">
        </p>
        <p>
            <label for="descripcion">Descripcón</label>
            <input type="text" name="descripcion">
        </p>
        <p>
            <button>Añadir</button></p>
        </p>    
    </form>

<?php endif?>

<?php if($_GET):?>
    <!-- Formulario de editar -->
    <form action="edit.php" method="GET">
        <input type="hidden" name="id" value="<?php print $resultado_id["id"];?>">
        <p>
            <label for="color">Color</label>
            <input type="text" name="color" value="<?php print $resultado_id['color'];?>">
        </p>
        <p>
            <label for="descripcion">Descripcón</label>
            <input type="text" name="descripcion" value="<?php print $resultado_id['descripcion'];?>">
        </p>
        <p>
            <button>Editar</button></p>
        </p>    
    </form>

<?php endif?>


</body>

</html>