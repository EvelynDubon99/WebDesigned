<?php 
include '../conexion/conexion.php';
session_start();

    if(isset($_POST['insert'])){
        $ID_status = $_POST['ID_status'];
        $nombre = $_POST['nombre'];
        $precio =$_POST['precio']; 
        $detalle =$_POST['detalle']; 
        $mysqli->query("INSERT INTO platillo(ID_status , nombre, precio, detalle) 
        VALUES('$ID_status','$nombre','$precio','$detalle')")
        or die($mysqli->error);

        header("Location: platillos.php");
    
    }
    
    
?>