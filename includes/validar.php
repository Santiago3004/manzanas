<?php
$conexion= mysqli_connect("localhost", "root", "", "proyectomanzanas");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 && strlen($_POST['rol']) >= 1 && strlen($_POST['tipodoc']) >=1 && strlen($_POST['numerodoc']) >=1){

    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);
    $rol = trim($_POST['rol']);
    $tipodoc = trim($_POST['tipodoc']);
    $numerodoc = trim($_POST['numerodoc']);

    $consulta= "INSERT INTO user (nombre, correo, telefono, password, rol, tipodoc, numerodoc)
    VALUES ('$nombre', '$correo','$telefono','$password', '$rol', '$tipodoc', '$numerodoc' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }
}





?>