<?php
session_start();
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
        header('location: ../perfiles/admin.php');
      break;

      case 2:
        header('location: ../perfiles/empleado.php');
      break;

      case 3:
        header('location: ../perfiles/usuario.php');
      break;

      default:
    }
  }
?>