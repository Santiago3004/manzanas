<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM mujercuidadora";
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
    <title>Usuario</title>
  
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
            <input type="text" name="tipdoc" placeholder="Nombre:">
            <input type="text" name="numdoc" placeholder="Localidad:">
            <input type="text" name="nombre" placeholder="Dirección:">
            <input type="text" name="apellido" placeholder="Municipio:">
            <input type="text" name="telefono" placeholder="Nombre:">
            <input type="text" name="correo" placeholder="Localidad:">
            <input type="text" name="ciudad" placeholder="Dirección:">
            <input type="text" name="direccion" placeholder="Municipio:">
            <input type="text" name="ocupacion" placeholder="Ocupacion">
            <label for="nombre">Seleccione el servicio:</label>
            <div class="form-group form-label" >
             <select  name="servicio" class="form-control" required>
              <option value="Estudiar">Estudiar</option>
              <option value="Emprender">Emprender</option>
              <option value="Emplearse">Emplearse</option>
              <option value="Descansar">Descansar</option>
              <option value="Ejercitarse">Ejercitarse</option>
    
            </select>               
          </div>   
            <input type="submit" value="Agregar">
            </div></center>
        </form>
          <br>
          <br>
          <br>
          
    </main>
    <div class="users-table">
        <h2>Servicios registrados</h2>
        <table>
            <thead>
                <tr>
             
                    <th>Tipo de documento</th>
                    <th>Numero de documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>correo</th>
                    <th>ciudad</th>
                    <th>direccion</th>
                    <th>ocupacion</th>
                    <th>servicio</th>
               


                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
               
                        <th><?= $row['tipdoc'] ?></th>
                        <th><?= $row['numdoc'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><?= $row['ciudad'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['ocupacion'] ?></th>
                        <th><?= $row['servicio'] ?></th>
             
             
                  

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>