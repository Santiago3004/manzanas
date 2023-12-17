<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM user";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

	<link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">


<form  action="insert_user.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono *</label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                  <label for="rol" class="form-label">Fecha</label>
                                <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="Escribe el rol, 1 admin, 2 lector..">
                             
                            </div>
                            <br>
                            <div class="form-group form-label" >
                            <select id="opciones" name="tipodoc" class="form-control" required>
                              <option value="cc">Cedula de ciudadania</option>
                              <option value="cc extranjera">Cedula extranjera</option>
                              <option value="TI">Targeta de identidad</option>
                            </select>
                             
                            </div>
                            <div class="form-group">
                                  <label for="rol" class="form-label">Numero de documento</label>
                                <input type="number"  id="fecha" name="numerodoc" class="form-control" placeholder="Numero de documento">
                             
                            </div>
<br>
                      


                      
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                               <a href="../includes/index.html" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>