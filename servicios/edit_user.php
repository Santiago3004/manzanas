<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
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
$rol= $_POST['rol'];

$sql="UPDATE mujercuidadora SET tipdoc='$tipdoc', numdoc='$numdoc', nombre='$nombre', apellido='$apellido', telefono='$telefono',
 correo='$correo', ciudad='$ciudad', direccion='$direccion', ocupacion='$ocupacion', servicio='$servicio', rol='2' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>