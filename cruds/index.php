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
    <title>Administrador</title>
  
    <div id="botones">

    <button id="boton2" onclick="window.location.href='../views/user.php'">Roles</button>
    <button id="boton" onclick="window.location.href='../includes/index.html'">Cerrar sesión</button>
    <img style="display:flex" id="logomanzanas" src="../includes/Img/banner.png" alt="Banner Manzanas Del Cuidado">
    </div>
</head>

<body>
    
   
  
    <main>
        <br>
        <br>
        <form action="insert_user.php" method="POST">
              <center><div class="formulario">
              <h2>Manzanas</h2>
              <br>
            <input type="text" name="nombre" placeholder="Nombre:">
            <input type="text" name="localidad" placeholder="Localidad:">
            <input type="text" name="direccion" placeholder="Dirección:">
            <input type="text" name="municipio" placeholder="Municipio:">
            

            <input type="submit" value="Agregar">
            </div></center>
        </form>


          <form action="enviar.php" method="post">
            <center><div class="formulario">
              <h2>Formulario de servicios</h2>
        
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" required>
        
              <label for="descripcion">Descripción:</label>
              <textarea name="descripcion" id="descripcion" required></textarea>
        
              <label for="categoria_servicio">Categoría de servicio:</label>
              <select name="categoria_servicio" id="categoria_servicio">
                <option value="Hogar">Hogar</option>
                <option value="Salud">Salud</option>
                <option value="Educación">Educación</option>
                <option value="Ocio">Ocio</option>
              </select>
        
              <label for="tipo_servicio">Tipo de servicio:</label>
              <select name="tipo_servicio" id="tipo_servicio">
                <option value="Presencial">Presencial</option>
                <option value="Virtual">Virtual</option>
              </select>
        
              <input type="submit" value="Enviar">
            </div></center>
          </form>

          <form action="enviar.php" method="post">
            <center><div class="formulario">
              <h2>Formulario de establecimiento</h2>
        
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" required>
        
              <label for="responsable">Responsable:</label>
              <input type="text" name="responsable" id="responsable" required>
        
              <label for="direccion">Dirección:</label>
              <input type="text" name="direccion" id="direccion" required>
        
              <input type="submit" value="Enviar">
            </div></center>
          </form>
          <br>
          <br>
          <br>
          
    </main>
    <div class="users-table">
        <h2>Mazanas registradas</h2>
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