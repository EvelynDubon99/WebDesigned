<?php 
include '../conexion/conexion.php';
session_start();
    if(isset($_GET['delete'])){
        $ID_platillo=$_GET['delete'];
        $mysqli->query("DELETE FROM detalle_platillo WHERE ID_ingredientes = '".$ID_ingredientes."'")
        or die($mysqli->error);
       
        header("Location: platillos.php");
    
    }
   
?>