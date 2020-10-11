<?php 
include '../conexion/conexion.php';
session_start();
    if(isset($_GET['delete'])){
        $ID_ingredientes=$_GET['delete'];
        $mysqli->query("DELETE FROM ingredientes WHERE ID_ingredientes = $ID_ingredientes ")
        or die($mysqli->error);
       
       
        header("Location: ingredientes.php");
    
    }
   
?>