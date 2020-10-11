<?php 
include '../conexion/conexion.php';
session_start();
    if(isset($_GET['delete'])){
        $ID_platillo=$_GET['delete'];
        $mysqli->query("DELETE FROM platillo WHERE ID_platillo = $ID_platillo")
        or die($mysqli->error);
       
        header("Location: platillos.php");
    
    }
   
?>