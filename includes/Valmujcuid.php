<?php
$conexion= mysqli_connect("localhost", "root", "", "proyectomanzanas");

if(isset($_POST['registrar'])){

    if(strlen($_POST['tipdoc']) >=1 && strlen($_POST['numdoc'])  >=1 && strlen($_POST['nombre'])  >=1 
    && strlen($_POST['apellido'])  >=1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >=1 && strlen($_POST['ciudad']) >=1 
    && strlen($_POST['diereccion']) >=1 && strlen($_POST['ocupacion']) >=1 && strlen($_POST['servicio']) >=1 && strlen($_POST['rol']) >=1){

    $tipodoc = trim($_POST['tipdoc']);
    $numdoc = trim($_POST['numdoc']);
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $ciudad = trim($_POST['ciudad']);
    $direccion = trim($_POST['diereccion']);
    $ocupacion = trim($_POST['ocupacion']);
    $servicio = trim($_POST['servicio']);
    $rol = trim($_POST['rol']);

    $consulta= "INSERT INTO mujercuidadora(tipdoc, numdoc, nombre, apellido, telefono, correo, ciudad, diereccion, ocupacion, servicio, rol)
    VALUES ('$tipodoc', '$numdoc','$nombre','$apellido', '$telefono', '$correo', '$ciudad', '$direccion', '$ocupacion', '$servicio', '$rol')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/mujercuidadora.php');
  }
}





?>