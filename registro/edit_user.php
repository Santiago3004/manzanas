<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$fecha = $_POST['fecha'];
$tipodoc = $_POST['tipodoc'];
$numerodoc = $_POST['numerodoc'];

$sql="UPDATE user SET nombre='$nombre', correo='$correo', telefono='$telefono', password='$password', fecha='$fecha',
tipodoc='$tipodoc', numerodoc='$numerodoc' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>