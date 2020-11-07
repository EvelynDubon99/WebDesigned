<?php
session_start();
if(!isset($_SESSION['rol'])){
  header('location: /Intento/paginas/login.php');
}else{
  if($_SESSION['rol'] !=2 ){
    header('location: /Intento/paginas/login.php');
  }
}
?>