<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];

$sql="UPDATE manzanas SET nombre='$nombre', localidad='$localidad', direccion='$direccion', municipio='$municipio' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>