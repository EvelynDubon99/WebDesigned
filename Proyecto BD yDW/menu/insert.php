<?php 
include '../conexion/conexion.php';
session_start();

    if(isset($_POST['insert'])){
        $ID_platillo = $_POST['ID_platillo'];
        $Tiempo_comida = $_POST['Tiempo_comida'];
        $mysqli->query("INSERT INTO menu(ID_platillo ,Tiempo_comida) 
        VALUES('$ID_platillo','$Tiempo_comida')")
        or die($mysqli->error);

        $_SESSION['message'] = "Platillo insertado!";
        $_SESSION['msg_type'] = "success";

        header("Location:  catalogo.php");
    
    }
    
    
?>