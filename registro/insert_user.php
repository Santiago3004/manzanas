<?php
include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$fecha = $_POST['fecha'];
$rol = $_POST['rol'];
$tipodoc = $_POST['tipodoc'];
$numerodoc = $_POST['numerodoc'];


$sql = "INSERT INTO user VALUES('$id','$nombre','$correo','$telefono','$password','$fecha','2','$tipodoc','$numerodoc')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>