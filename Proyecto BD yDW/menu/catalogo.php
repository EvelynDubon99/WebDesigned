<?php
require_once '../conexion/conexion.php';
require_once '../permisos/permiso.php';


?>




<!doctype html>
<html lang="en">
  <head>
    <title>Catalogo_menu</title>
  
    <link href="../sass/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body class="text-center">
    <header>
    <nav class="navbar navbar-expand-xl navbar_intems " id="l"> <img src="../img/Logo.JPG" alt=80px width="80px"><a class="navbar-brand" href="#">The Zaguan</a> 
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon" id="narv"></span> </button> <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav"> <a class="nav-item nav-link active" href="../ingredientes/ingredientes.php">Ingredientes <span class="sr-only">(current)</span></a> 
               <a class="nav-item nav-link" href="../platillos/platillos.php">Platillos</a> <a class="nav-item nav-link" href="../menu/catalogo.php">Catalogo de Menú</a>
               <a class="nav-item nav-link" href="../admin_pedido/admin_pedido.php">Pedido</a>
               <a class="nav-item nav-link" href="../perfiles/perfiles.php">Perfil</a>
               <a class="nav-item nav-link" href="../paginas/logout.php"> OUT</a>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div> </nav>

                
              <nav>
                <div class ="container-fluid">
                  <div class="row justify-content-center">
                    <div class= "col-md-10">
                      <h3 class="text-center mt-2"> Menú </h3>
                      <hr>
                    </div>
                  </div>
                </div>
              </nav>

    </header>
    
   <section id="n1">
      <div class= "container">  
      <div class="row">
          <div class="col-md-3">
          <form action="insert.php" method="post" class="form-signin" id="form">
                <h3 class="text-center"> Agregar Menú </h3>
                <hr>
                <label class="">Platillo</label>
                    <?php $res = $mysqli->query("SELECT * FROM platillo");
                          $res2= mysqli_num_rows($res);
                    ?>
                    <select name="ID_platillo" class="form-control">
                      <?php 
                             if($res2 > 0){
                               while($ID_platillo = mysqli_fetch_array($res)){
                      
                      ?> 
                      <option value="<?php echo $ID_platillo['ID_platillo']?>"><?php echo $ID_platillo['nombre']?></option>
                      <?php
                               }
                              }
                      ?>
                      
                    </select>
                <br>

                <label class="sr-only">Tiempo de comida</label>
                <input type="Tiempo_comida" name="Tiempo_comida" id="Tiempo_comida" class="form-control" placeholder="Tiempo_comida">
                <br>

                <input type="submit" name="insert" value="Añadir" class="btn btn-lg btn-primary btn-block" id="primary">
            </from>
          </div>
          <div  class="col-md-1">
          </div>

          <div class="col-md-8">
          <h3 class="text-center"> Menú </h3>
          <div class=" table-responsive-md">
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                  <th>ID_menu</th>
                  <th>ID_Platillo</th>
                  <th>Tiempo_comida</th>
                  <th>Accion</th>
                </tr>
            </thead>
            <tbody>
              <?php
                include '../conexion/conexion.php';
                $result = $mysqli->query("SELECT * FROM menu") or die($mysqli->error);
                while ($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
                <td><?php echo $row['ID_menu']?></td>
                <td><?php echo $row['ID_platillo']?></td>
                <td><?php echo $row['Tiempo_comida']?></td>
                <td>
                <a href="update.php?edit=<?php echo $row['ID_menu']?> " class="badge badge-primary">Edit</a>
                <a href="delet.php?delete=<?php echo $row['ID_menu']?>" class="badge badge-danger">Delete</a>
                <a href="read.php?read=<?php echo $row['ID_menu']?> " class="badge badge-success">Read</a>
                </td>
              </tr>
                <?php }?>
            </tbody>
               
            </table>
          </div>
          
         </div>      
        </div>
        <br>
    </section>
  <footer class="page-footer font-small mdb-color pt-4" id="f">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">
    
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
    
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">The Zaguan</h6>
            <p>Entre los fogones, parillas de leña y largas caminatas en los huertos de vegetales en las casas guatemaltecas, 
              nace la historia de Mama Gloria, una cocinera local que entre sabores y aromas en el zaguan del hogar nacieron 
              estos sabores tradicionales y con sabor a hogar.</p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p>
              <i class="fas fa-home mr-3"></i> Guatemala</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> +502 4574 5697</p>
            <p>
              <i class="fas fa-print mr-3"></i> +502 4574 5697</p>
          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Footer links -->
    
        <hr>
    
        <!-- Grid row -->
        <div class="row d-flex align-items-center">
    
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4">
    
            <!--Copyright-->
            <p class="text-center text-md-left">© 2020
            </p>
    
          </div>
      </div>
      <!-- Footer Links -->
    
    </footer>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>