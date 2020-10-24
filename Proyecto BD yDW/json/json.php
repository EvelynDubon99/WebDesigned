<?php
    include '../conexion/conexion.php';

    $result = $mysqli->query("SELECT p.nombre, p.precio, p.ID_status, p.detalle, m.Tiempo_comida FROM menu m 
    inner join platillo p on m.ID_platillo = p.ID_platillo ");
    $arreglo = array();
    while($row = mysqli_fetch_array($result)) {
        $arreglo[] = array(
        'nombre' => $row["nombre"],
        'Tiempo_comida' => $row["Tiempo_comida"],
        'precio' => $row["precio"],
        'ID_status' => $row["ID_status"],
        'detalle' => $row["detalle"]
        );
    }
        $json = json_encode($arreglo);
        echo $json;


?>