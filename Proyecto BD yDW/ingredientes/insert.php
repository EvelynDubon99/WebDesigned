<?php 
include '../conexion/conexion.php';
session_start();

    if(isset($_POST['insert'])){
        $ID_status = $_POST['ID_status'];
        $Nombre = $_POST['Nombre'];
        $result=$mysqli->query("SELECT * FROM ingredientes WHERE Nombre = '".$Nombre."'");
            if(mysqli_num_rows($result)>0){
                echo '<script type="text/javascript">
                alert("Ingrediete repertido!");
                window.location.href="ingredientes.php";
                </script>';
            }
        $Cantidad = $_POST['Cantidad'];
        $Descripcion = $_POST['Descripcion'];
        $mysqli->query("INSERT INTO ingredientes(ID_status ,Nombre, Cantidad, Descripcion) 
        VALUES('$ID_status','$Nombre','$Cantidad','$Descripcion')")
        or die($mysqli->error);

        $_SESSION['message'] = "Ingrediente insertado!";
        $_SESSION['msg_type'] = "success";

        header("Location: ingredientes.php");
    
    }
    
    
?>