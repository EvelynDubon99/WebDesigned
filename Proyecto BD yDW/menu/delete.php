<?php
session_start();
    if(isset($_GET['delete'])){
        $ID_menu=$_GET['delete'];
        $mysqli->query("DELETE FROM menu WHERE ID_menu = $ID_menu ")
        or die($mysqli->error);
       
       
        header("Location: catalogo.php");
    
    }
   
?>