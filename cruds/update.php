<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM manzanas WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="text" name="localidad" placeholder="Localidad" value="<?= $row['localidad']?>">
                <input type="text" name="direccion" placeholder="Dirección" value="<?= $row['direccion']?>">
                <input type="text" name="municipio" placeholder="Municipio" value="<?= $row['municipio']?>">
                

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>