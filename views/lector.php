<?php
session_start();
error_reporting(0);
$validar = $_SESSION['nombre'];
if( $validar == null || $validar = ''){
  header("Location: ../includes/login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="website icon" type="icon" href="Img/icono2.png">
<link rel="stylesheet" href="Implementos/Inicio.css">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link rel="website icon" type="icon" href="../includes/Img/icono2.png">
    <link rel="stylesheet" href="../includes/Implementos/administracion.css">
    <title>Users CRUD</title>

    <div id="botones">
    <h4 id="titulo">Usuario</h4>
    <button id="boton" onclick="window.location.href='Login.html'">Cerrar sesión</button>
    <button id="boton2" onclick="window.location.href='../cruds/userinicio.php'">Regresar</button>
    <img style="display:flex" id="logomanzanas" src="../includes/Img/banner.png" alt="Banner Manzanas Del Cuidado">
    </div>
</head>

<div class="container is-fluid">


    <div id="botones">

        <button id="boton" onclick="window.location.href='../includes/_sesion/cerrarSesion.php'">Cerrar seccion</button>

    </div>
    <center>
    <div class="col-xs-12">
        <h1>Hola <?php echo $_SESSION['nombre']; ?></h1>
        <br>
        <h1>Mapa Manzanas</h1>
        <br>
        <div>
        </div>
        <br>
        </center>

        <center>
        <iframe width="80%" height="500" frameborder="0" style="border:1px" allowfullscreen=""
            src="https://mapas.bogota.gov.co/?l=62479,62483,62482,62481&amp;e=-74.41550578283291,4.4873039291569885,-73.83632029699383,4.76380493784549,4686&amp;b=7256&amp;show_menu=true&amp;show_list=false&amp;open_menu=false&amp;show_legend=false"></iframe>
            </center>     
            <br>


      
?>
            </body>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js">
        </script>
        <script src="../js/user.js"></script>
</html>