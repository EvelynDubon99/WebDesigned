<?php
include "conexion.php";
$status = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ID_status = $_POST['ID_status'];
        $Nombre = $_POST['Nombre'];
        $Cantidad = $_POST['Cantidad'];
        $Descripcion = $_POST['Descripcion'];
        $stmt=$pdo->query("INSERT INTO ingredientes( ID_status ,Nombre, Cantidad, Descripcion) 
            VALUES('".$ID_status."','".$Nombre."','".$Cantidad."','".$Descripcion."')");
                
        }
    if($_POST){
        header("Location: ingredinetes.php");
    }



                      
