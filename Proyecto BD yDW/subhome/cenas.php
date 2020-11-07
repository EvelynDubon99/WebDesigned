<?php include '../conexion/conexion.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Menu</title>
  
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
            <div class="navbar-nav"> <a class="nav-item nav-link active" href="./Home.php">Home <span class="sr-only">(current)</span></a> 
               <a class="nav-item nav-link" href="./about.html">About</a> <a class="nav-item nav-link" href="../paginas/menu.php">Menu</a>
               <a class="nav-item nav-link" href="../paginas/contact.php"> Contact Us</a> <a class="nav-item nav-link" href="../paginas/preguntas.php"> Preguntas Frecuentes</a>
               <a class="nav-item nav-link" href="./login.php"> Login</a> <a class="nav-item nav-link" href="./registry.php"> Sign up</a>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div>
              </nav>
                    
    </header>
    <section>
      <div class="food_offer3" >
          <div class="overlay">
            <div class="valign_wrapper">
              <h1 class="food_offer_heading ">Cena</h1>
              </div>
          </div>
        </div>
      </section>
      <br>
      <br>
      <section>
      <div class="container">
        <div class="row">
            <div class="col-3">
              <a href="../subhome/epeciales.php" class="offer-btn2"> Especial</a>
              <a href="../subhome/desayunos.php" class="offer-btn2"> Desayuno</a>
            </div>
            <div class="col-3">
              <a href="../subhome/almuerzos.php" class="offer-btn2"> Almuerzo</a>
              <a href="../subhome/cenas.php" class="offer-btn2"> Cena</a>
            </div>
        </div>
      <div>
    </section>
    <br>
    <br>
      <section>
     
      <div class="food_menu">
          <div class="container">
            <div class="row">
            <div class= "col-12">
                <h3>Cena</h3>
                <hr>
            </div>
              <?php 
                $result = $mysqli->query("SELECT * FROM `vista_menu`  where ID_status = 3
                and  Tiempo_comida='Cena'") or die($mysqli->error);
                  while ($row = mysqli_fetch_assoc($result)){
            ?>
                  <div class="col-md-3">
                   <img  id="photo_menu" src="data: <?php echo $tipo['tipo_img']?>;base64,<?php echo base64_encode($row['img'])?>">
                   <h3 class="menu-item"> <?php echo $row['nombre']?></h3> 
                          <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                          <br>
                          <a href="../ordenar/pagina_detalle.php?read=<?php echo $row['ID_platillo']?> " class="offer-btn2">Ver mas</a>
                          <br>
                  </div>
                    <?php }?>
      </section>
      <br>
            <br>
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