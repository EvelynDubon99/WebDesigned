<?php include '../conexion/conexion.php';
session_start();
if(!isset($_SESSION['rol'])){
  header('location: ../paginas/login.php');
}else{
  if($_SESSION['rol'] !=1){
    header('location: ../paginas/login.php');
  }
}


if(!empty($_SESSION['ID'])){
  $lol = $_SESSION['ID'];
}else{
  $lol = -1;
}
$resultado=$mysqli->query("SELECT * FROM usuario WHERE ID_user = $lol");
$row=mysqli_fetch_assoc($resultado);
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Perfil</title>
  
    <link href="../sass/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <header >
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" id="l"> <a class="navbar-brand" href="#">The Zaguan</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
            <div class="navbar-nav"> <a class="nav-item nav-link active" href="../ingredientes/ingredientes.php">Ingredientes <span class="sr-only">(current)</span></a> 
               <a class="nav-item nav-link" href="../platillos/platillos.php">Platillos</a> <a class="nav-item nav-link" href="#">Catalogo de Menú</a>
               <a class="nav-item nav-link" href="../paginas/logout.php"> OUT</a>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div> </nav>
                    
    </header>
   
    <section style="background-image: url('../img/IMAGE50.png') !important;">
      
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    <form class="form-signin" id="form" >
                      <h1 class="h3 mb-3 font-weight-normal"><img src="../img/usuario.png" alt=80px width="80px">  <?php echo $row["usuario"]; ?></h1>
                      <h3> Bienvenido!</h3>
                      <p> Precione el boton para poder editar lo que necesite.</p>
                      <br>
                      <div>
                      <a href="../ingredientes/ingredientes.php " class="btn btn-info" id="primary"><img src="../img/agregar-usuario.png" alt="20px" width="20px"> </a>
                      <a href="../ingredientes/ingredientes.php " class="btn btn-info" id="primary"><img src="../img/editar.png" alt="20px" width="20px"> Ingredientes</a>
                      </div>
                      <br>
                      <div>
                      <a href="../platillos/platillos.php " class="btn btn-info" id="primary"><img src="../img/editar.png" alt="20px" width="20px">  Platillos</a>
                      <a href="" class="btn btn-info" id="primary"><img src="../img/editar.png" alt="20px" width="20px">  Menú</a>
                      </div>
                    </form> 
                    <br> 
                </div>  
            </div>  
        </div> 
        <br>
        <br>
        <br>
        <br> 
    </section>
  
    <footer class="page-footer font-small mdb-color pt-5" id="f">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left pb-3">
        </div>
        <hr>
        <div class="row d-flex align-items-center">
          <div class="col-md-3 col-lg-4">
            <p class="text-center text-md-left">©️ 2020
            </p>
          </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  </body>
</html>