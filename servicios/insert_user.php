<?php
include("connection.php");
$con = connection();


$id = null;
$tipdoc= $_POST['tipdoc'];
$numdoc= $_POST['numdoc'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$telefono= $_POST['telefono'];
$correo= $_POST['correo'];
$ciudad= $_POST['ciudad'];
$direccion= $_POST['direccion'];
$ocupacion= $_POST['ocupacion'];
$servicio= $_POST['servicio'];
$rol= null;


$sql = "INSERT INTO mujercuidadora VALUES('$tipdoc','$numdoc','$nombre','$apellido','$telefono,'$correo','$ciudad','$direccion,'$ocupacion','$servicio','$rol'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>