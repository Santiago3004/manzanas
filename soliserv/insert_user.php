<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];


$sql = "INSERT INTO manzanas VALUES('$id','$nombre','$localidad','$direccion','$municipio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>