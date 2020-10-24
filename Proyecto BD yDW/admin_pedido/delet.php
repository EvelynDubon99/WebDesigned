<?php 
include '../conexion/conexion.php';
session_start();
    if(isset($_GET['delete'])){
        $ID_pedido=$_GET['delete'];
        $mysqli->query("DELETE FROM pedido WHERE ID_pedido = $ID_pedido")
        or die($mysqli->error);
       
        header("Location: admin_pedido.php");
    
    }
   
?>