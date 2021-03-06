<?php include '../conexion/conexion.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>The Zaguan</title>
  
    <link href="../sass/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- google -->

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
               <a class="nav-item nav-link" href="./about.html">About</a> <a class="nav-item nav-link" href="./menu.php">Menu</a>
               <a class="nav-item nav-link" href="../paginas/contact.php"> Contact Us</a> <a class="nav-item nav-link" href="../paginas/preguntas.php"> Preguntas Frecuentes</a>
               <a class="nav-item nav-link" href="./login.php"> Login</a> <a class="nav-item nav-link" href="./registry.php"> Sign up</a>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div>
              </nav>

                
    </header>
  <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../img/IMG_9692.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/bg_4.jpg" alt="Second slide">
        </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
    <section>
      <div class="about">
      <div class="container">
        <h2 class="text-center">About Us</h2>
        <div class="row">
          <div class="col-md-6">
            <h4>Welcome to <span class="color-primary">The Zaguan!</span></h4>
            <p class="line-space">
              Entre los fogones, parillas de leña y largas caminatas en los huertos de vegetales en las casas guatemaltecas, nace la historia de Mama Gloria,
              una cocinera local que entre sabores y aromas en el zaguan del hogar nacieron estos sabores tradicionales y con sabor a hogar. 
              En 1950 en la localidad de San Juan el Obispo nace un pequeño comedor con carne de la localidad y esos sabores de casa Mama Gloria con su tradicional 
              receta de paches, tamalitos de chipilín, el caldo de res del sábado y la carne a la parrilla creo un nuevo concepto el cual hasta la fecha han sido 
              sabores que han pasado de generación a generación. 
              2020 la tercera generación de familia mantiene el mismo sabor de los mejores cortes, salsas, recados con productos locales y de temporada manteniendo 
              el mismo esquema de tradición, sabor y alegría que solo una mesa guatemalteca dato paladar.  

            </p>
          </div>
          <div class="col-md-6 d-flex  justify-content-end">
            <figure>
              <img src="../img/parrillada.jpg" class="rounded" />
              <div class="back"></div>
            </figure>
          </div>
        </div>
      </section>
      <section>
        <div class="food_offer2" >
          <div class="overlay">
            <div class="valign_wrapper">
              <h1 class="food_offer_heading">best fast food collection</h1>
              <p class="food_offer_subheading">
                the best tradicional and homely food
              </p>
              <a href="menu.php" class="offer-btn">Order Now</a>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="food_menu">
          <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <hr>
            <div class="row">
              <div class="col-md-6">
                  <h3>Specials</h3>
                  <ul class="menu">
                  <?php 
                    $result = $mysqli->query("SELECT * FROM vista_menu WHERE  Tiempo_comida='Especial' and ID_status = 3 ;") or die($mysqli->error);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="menu_item">
                   <?php echo $row['nombre']?> <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                    </li>
                    <?php }?>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h3>Breakfast</h3>
                  <ul class="menu">
                  <?php 
                    $result = $mysqli->query("SELECT * FROM vista_menu WHERE  Tiempo_comida='Desayuno' and ID_status = 3;") or die($mysqli->error);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="menu_item">
                   <?php echo $row['nombre']?> <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                    </li>
                    <?php }?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </section>
      <section >
        <div class="food_menu">
          <div class="container">
            <hr>
            <div class="row">
              <div class="col-md-6">
                <h3>Lunches</h3>
                <ul class="menu">
                <?php 
                    $result = $mysqli->query("SELECT * FROM vista_menu WHERE  Tiempo_comida= 'Almuerzo' and ID_status = 3;") or die($mysqli->error);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="menu_item">
                   <?php echo $row['nombre']?> <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                    </li>
                    <?php }?>
                </ul>
              </div>
              <div class="col-md-6">
                <h3>Dinners</h3>
                <ul class="menu">
                <?php 
                    $result = $mysqli->query("SELECT * FROM vista_menu WHERE Tiempo_comida= 'Cena' and ID_status = 3;") or die($mysqli->error);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <li class="menu_item">
                   <?php echo $row['nombre']?> <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                    </li>
                    <?php }?>
                </ul>
              </div>
            </div>
            </div>
            </div>
      </section>
      <section>
        <div class="food_offer3">
            <div class="overlay">
              <div class="valign_wrapper">
                <h1 class="food_offer_heading " >About Chef</h1>
                </div>
            </div>
          </div>
        </section>
      <section>
        <div class="about">
        <div class="container">
          <h2 class="text-center"></h2>
          <div class="row">
            <div class="col-md-6">
              <h4>Hector <span class="color-primary">Dubón</span></h4>
              <p class="line-space">
                Nuestro Chef Dubón graduado de la Escuela técnica Culinaria de Alta Cocina Chef’s Center
                con una certificacion en ServSafe Certification con los mejores toques guatemaltecos 
                en nuestro restarurante. Uno de los Chefs mas reconocidos en México, Argentina, Chile,
                España y Brasil. 
                Aprendiendo de otras cocinas para poderle darle un mejor toque a nuestras comidas 
                guatemaltecas en el restarurante de la famalia Dubón.
              </p>
            </div>
            <div class="col-md-6 d-flex  justify-content-end">
              <figure>
                <img src="../img/chef-1.jpeg" class="rounded" />
                <div class="back"></div>
              </figure>
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