<?php 
include '../conexion/conexion.php';

session_start();

if(isset($_POST)){
    $ID=session_id();
    $total =0;
    foreach ($_SESSION["cart"] as $keys => $value){
        $total = $total + ($value["item_quantity"] * $value["product_price"]);
    }
    $user=$_SESSION['ID'];
    $result2=$mysqli->query("INSERT INTO `pago` (ID_user, Total) values('$user','$total')");

    foreach ($_SESSION["cart"] as $keys => $value){
    $ID = $value["product_id"];
    $producto = $value["item_quantity"];
    $user=$_SESSION['ID'];
    $result = $mysqli->query("INSERT INTO `pedido` ( `ID_user`, `ID_platillo`,`ID_status`, `fecha`, `Cantidad`, `Total`) VALUES ( '$user', '$ID', '5',NOW(),'$producto', '$total');");
    }
    header("Location:conf_order.php");
}
    
?>