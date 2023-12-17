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
    <h4 id="titulo">Usuario</h4>
    <button id="boton" onclick="window.location.href='../includes/index.html'">Cerrar sesión</button>

    <img style="display:flex" id="logomanzanas" src="../includes/Img/banner.png" alt="Banner Manzanas Del Cuidado">
    </div>
</head>
<body>
  <br><br>
    <div class="users-table">
        <h2>Manzanas </h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Localidad</th>
                    <th>Direccion</th>
                    <th>municipio</th>
                    <th>ver</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
               
                        <th><?= $row['nombre']?></th>
                        <th><?= $row['localidad'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['municipio'] ?></th>
                        <th><a href="../views/lector.php">Ver</a></th>
                
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>