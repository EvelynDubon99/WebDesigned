<?php 
include '../conexion/conexion.php';
session_start();
    if(isset($_GET['delete'])){
        $ID_user=$_GET['delete'];
        $mysqli->query("DELETE FROM usuario WHERE ID_user = $ID_user ")
        or die($mysqli->error);
       
       
        header("Location: informacion.php");
    
    }
   
?>