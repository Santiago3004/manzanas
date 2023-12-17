<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM manzanas";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="website icon" type="icon" href="../includes/Img/icono2.png">
    <link rel="stylesheet" href="../includes/Implementos/administracion.css">
    <title>Users CRUD</title>

    <div id="botones">
    <h1 id="titulo">Administración</h1>
    <button id="boton" onclick="window.location.href='Login.html'">Cerrar sesión</button>
    <button id="boton2" onclick="window.location.href='Login.html'">Volver a inicio</button>
    <img id="logomanzanas" src="./Img/banner.png" alt="Banner Manzanas Del Cuidado">
    </div>
</head>

<body>
    <div class="users-form">
        <h1>Manzanas</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre:">
            <input type="text" name="localidad" placeholder="Localidad:">
            <input type="text" name="direccion" placeholder="Dirección:">
            <input type="text" name="municipio" placeholder="Municipio:">
            

            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
             
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
               
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['localidad'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['municipio'] ?></th>
                  
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
  

</body>

</html>