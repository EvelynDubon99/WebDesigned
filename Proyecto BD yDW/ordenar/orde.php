<?php
    include '../conexion/conexion.php';
    session_start();


    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="orde.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="orde.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="orde.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Ordenar</title>
  
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
               <form class="form-inline my-2 my-lg-0" metho="GET" action="buscar.php" >
                <input class="form-control mr-sm-2"  name="search" type="search" placeholder="Search" aria-label="Search">
                <input type="submit" name="submit" value="Search" class="btn btn-outline-success my-2 my-sm-0" id="primary">
                </form>
                <a class="nav-item nav-link disabled" href="#"></a> </div> </div>
              </nav>
                    
    </header>
<br>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h3 class="title2">Detalle de Compra</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                    <tr>
                        <th>Platillo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Precio Total</th>
                        <th>Eliminar</th>
                    </tr>

                    <?php
                        if(!empty($_SESSION["cart"])){
                            $total = 0;
                            foreach ($_SESSION["cart"] as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $value["item_name"]; ?></td>
                                    <td ><?php echo $value["item_quantity"]; ?></p></td>
                                    <td>Q <?php echo $value["product_price"]; ?> .00</td>
                                    <td >
                                        Q <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> </p></td>
                                    <td><a href="orde.php?action=delete&id=<?php echo $value["product_id"]; ?>" ><span
                                                class="text-danger">Eliminar</span></a></td>
                                    <input type="hidden"   class="form-control" value="<?php echo $value["product_id"]; ?>">
                                </tr>
                                <?php
                                $total = $total + ($value["item_quantity"] * $value["product_price"]);
                            }
                                ?>
                                 <input type="hidden"   class="form-control" value="<?php echo $total; ?>">
                                <tr>
                                    <td colspan="3" align="right">Total</td>
                                    <th align="right">Q. <?php echo number_format($total, 2); ?></th>
                                    <td></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>
                  <form class="form-inline my-2 my-lg-0" action="pagar.php" metho="POST" >
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="primary" name="submit"> Generar Pago</button>
                    </form>
                </div>
        </div>
       
    </div>
</div>

</section>
<br>

<section>
      <div class="food_menu">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              
              <hr>
              <br>
              </div>
              <?php 
                    $result = $mysqli->query("SELECT p.nombre, p.detalle, p.img, p.precio, p.ID_platillo, m.Tiempo_comida FROM platillo p inner join menu m 
                    on p.ID_platillo= m.ID_platillo ORDER BY m.Tiempo_comida DESC;") or die($mysqli->error);
                    if(mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)){
                    ?>
                  <div class="col-md-3">
                  <h3><?php echo $row["Tiempo_comida"]; ?></h3>
                  <form method="post" action="orde.php?action=add&id=<?php echo $row["ID_platillo"]; ?>"  class="form-signin2">
                   <img  id="photo_menu" src="data: <?php echo $tipo['tipo_img']?>;base64,<?php echo base64_encode($row['img'])?>">
                   <h5 class="menu-item"> <?php echo $row['nombre']?></h5> 
                          <b><span class="menu_price">Q. <?php echo $row['precio']?>.00</span></b>
                          <input type="number" name="quantity"  min="0" max="10" step="1" value="1" class="form-control">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["nombre"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["precio"]; ?>">
                            <br>
                            <input type="submit" name="add"  class="offer-btn2" value="Add to Cart" >
                  </form>
                  </div>
                    <?php }
                    }?>
      </section>
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
