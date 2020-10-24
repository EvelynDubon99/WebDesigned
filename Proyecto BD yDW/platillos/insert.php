<?php 
include '../conexion/conexion.php';
session_start();

    if(isset($_POST['insert'])){
        $ID_status = $_POST['ID_status'];
        $image = $_FILES['image']['tmp_name'];
        $tipo = $_FILES['image']['type'];
        $imgContenido = addslashes(file_get_contents($image));
        $nombre = $_POST['nombre'];
        $precio =$_POST['precio']; 
        $detalle =$_POST['detalle']; 
        $mysqli->query("INSERT INTO platillo(ID_status ,img, tipo_img, nombre, precio, detalle) 
        VALUES('$ID_status','$imgContenido','$tipo','$nombre','$precio','$detalle')")
        or die($mysqli->error);

        header("Location: platillos.php");
    
    }
    
    
?>