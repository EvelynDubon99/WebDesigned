<?php
    include '../conexion/conexion.php';
    include '../permisos/permisos_lo.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pago</title>
  
    <link href="../sass/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- google fonts -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <header >
    <nav class="navbar navbar-expand-xl navbar_intems " id="l"> <img src="../img/Logo.JPG" alt=80px width="80px"><a class="navbar-brand" href="#">The Zaguan</a> 
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
          <span class="navbar-toggler-icon" id="narv"></span> </button> <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav"> <a class="nav-item nav-link active" href="../paginas/Home.php">Home <span class="sr-only">(current)</span></a> 
               <a class="nav-item nav-link" href="../paginas/about.html">About</a> <a class="nav-item nav-link" href="../paginas/menu.php">Menu</a>
               <a class="nav-item nav-link" href="../paginas/contact.php"> Contact Us</a> <a class="nav-item nav-link" href="../paginas/preguntas.php"> Preguntas Frecuentes</a>
               <a class="nav-item nav-link" href="../ordenar/orde.php"> Carrito</a>
               <a class="nav-item nav-link" href="../perfiles/usuario.php"> Perfil</a> 
               <a class="nav-item nav-link" href="../ordenar/pedido.php">Pedido</a> 
               <a class="nav-item nav-link" href="../paginas/logout.php"> OUT</a>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div>
              </nav>
                    
    </header>
<br>
<?php if(isset($_POST)){
        $total =0;
        foreach ($_SESSION["cart"] as $keys => $value){
            $total = $total + ($value["item_quantity"] * $value["product_price"]);
        }
    }?>
  <section id="n1">
      <br>
      <br>
      <br>
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
            <form class="form-signin" id="form"  action="insert.php" metho="POST">
                                <h1 class="h4 mb-4 font-weight-normal"> Forma de pago</h1>
                                    
                                <hr>
                                    <label> Total a pagar </label>
                                    <input type="pago" class="form-control input-sm"  readonly value="<?php echo $total;?>" required>
                                    <br>
                                    <label  class="sr-only" >Nombre Completo</label>
                                    <input type="nombre"  name="nombre"class="form-control" placeholder="Nombre Completo" required="" autofocus="">
                                    <br>
                                    <label  class="sr-only" >Número de Tarjetas</label>
                                    <input  type="number" name="tarjeta" class="form-control"  placeholder="No. Tarjeta" required="" autofocus="">
                                    <br>
                                    <label  class="" >Fecha de expiración</label>
                                    <input  type="month" name="tarjeta" class="form-control"  placeholder="Tarjeta" required="" autofocus="">
                                    <br>
                                    <label  class="" >Codigo de Seguridad</label>
                                    <input  type="number" name="codigo" class="form-control"  placeholder="CVC" required="" autofocus="">
                                    <br>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="primary" name="submit"> Pagar</button>
                                
                            </form> 
                <br>


            </div>
            <div class="col-4">
               
        </div>
    </div>
    </div>
  </section>
 
   
    <footer class="page-footer font-small mdb-color pt-4" id="f">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left mt-3 pb-3">
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
        </div>
        <hr>
        <div class="row d-flex align-items-center">
          <div class="col-md-3 col-lg-4">
            <p class="text-center text-md-left">© 2020
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
