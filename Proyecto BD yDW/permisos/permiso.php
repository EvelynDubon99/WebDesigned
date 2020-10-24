<?php
session_start();
if(!isset($_SESSION['rol'])){
  header('location: /Intento/paginas/login.php');
}else{
  if($_SESSION['rol'] !=2 && $_SESSION['rol'] !=1){
    header('location: /Intento/paginas/login.php');
  }
}
?>