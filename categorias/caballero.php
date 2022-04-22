<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/471a905cb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/tarjetas.css">
    <script defer src="../js/index.js"></script>
    <title>Ropa de caballero</title>
</head>
<body>
<!-- menu principal-->
     <header class="header">
        <nav class="nav">
         <a class="logo nav-link">FASHION STYLE</a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
          <ul class="nav-menu">
        <li class="nav-menu-item">
        <a href="./bienvenida.php" class="nav-menu-link nav-link">inicio</a>
        </li>
        <li class="nav-menu-item">
        <a href="./quienessomos.html" class="nav-menu-link nav-link">quiénes somos</a>
        </li>
        <li class="nav-menu-item">
        <a href="./contactenos.php" class="nav-menu-link nav-link">Contáctenos</a>
        </li>
        <li class="nav-menu-item">
        <a href="./carrito.php" class="nav-menu-link nav-link nav-menu-link_active">Mis Compras</a></li>
        </ul>
        </nav>
     </header>
  
<!--   Tarjetas-->
<section>
        <center>
          <div class="main-content">
            <div class="content-page">
              <div class="title-section">Ropa de Caballero</div>
              <div class="products-list">

                            <!--   Tarjeta 1-->


                  <div class="product-box">
                    <form action="caballero.php" method="POST">
                    <div class="product">
                      <img src="https://img.ltwebstatic.com/images3_pi/2021/08/20/16294245238cc0f0a784683d256031522088028bc3_thumbnail_600x.webp">
                      <div class="detail-title" name="txtProducto">SUDADERA</div>
                      <input type="hidden" name="txtProducto" value="Sudadera">
                      <div class="detail-description" name="txtDescripcion">Sudaderas para hombre Cordón Bolsillo Letras Calle de color amarillo</div>
                      <input type="hidden" name="txtDescripcion" value="Sudaderas para hombre Cordón Bolsillo Letras Calle de color amarillo">
                      <div class="detail-price" name="txtprecio">MXN527.<span>99</span></div>
                      <input type="hidden" name="txtPrecio" value="527.99">
                      <center>
                       <input type ="number" name="cant" value="1" style="width: 50px;">
                       <br>   
                       <input type="submit" value="Agregar" name="btnAgregar">
                       <br> <br>
                       </center>
                    </div>
                  </a>
                </form>
                </div>

                              <!--   Tarjeta 2-->



        <div class="product-box">
        <form action="caballero.php" method="POST">
          <div class="product">
            <img src="https://img.ltwebstatic.com/images3_pi/2021/11/18/16372303553151ffec8bb1155013bef09bde94a7b5_thumbnail_600x.webp">
            <div class="detail-title">CAMISETA</div>
            <input type="hidden" name="txtProducto" value="Camiseta">
            <div class="detail-description">Hombres Camiseta con estampado de letra japonesa y figura</div>
            <input type="hidden" name="txtDescripcion" value="Hombres Camiseta con estampado de letra japonesa y figura">
            <div class="detail-price">MXN217.<span>99</span></div>
            <input type="hidden" name="txtPrecio" value="217.99">
            <center>
           <input type ="number" name="cant" value="1" style="width: 50px;">
           <br>   
           <input type="submit" value="Agregar" name="btnAgregar">
           <br> <br>
         </center>
          </div>
        </a>
        </form>
      </div>

                    <!--   Tarjeta 3-->


      <div class="product-box">
      <form action="caballero.php" method="POST">
        <div class="product">
          <img src="https://img.ltwebstatic.com/images3_pi/2021/07/07/1625634817b8c4c7fce211b5f83853a6143a19f298_thumbnail_600x.webp">
          <div class="detail-title">CAMISA</div>
          <input type="hidden" name="txtProducto" value="Camisa">
          <div class="detail-description">Hombres Camisa con estampado de letra con cinta en contraste</div>
          <input type="hidden" name="txtDescripcion" value="Hombres Camisa con estampado de letra con cinta en contraste">
          <div class="detail-price">MXN341.<span>99</span></div>
          <input type="hidden" name="txtPrecio" value="341.99">
          <center>
           <input type ="number" name="cant" value="1" style="width: 50px;">
           <br>   
           <input type="submit" value="Agregar" name="btnAgregar">
           <br> <br>
         </center>
        </div>
      </a>
      </form>
    </div>

                  <!--   Tarjeta 4-->


    <div class="product-box">
    <form action="caballero.php" method="POST">
      <div class="product">
        <img src="https://img.ltwebstatic.com/images3_pi/2021/12/31/1640938501a4309ce233b1fbf22455ec1844310e39_thumbnail_600x.webp">
        <div class="detail-title">BLAZER</div>
        <input type="hidden" name="txtProducto" value="Blazer">
        <div class="detail-description">Hombres Blazer de cuello esmoquin panel en contraste con botón</div>
        <input type="hidden" name="txtDescripcion" value="Hombres Blazer de cuello esmoquin panel en contraste con botón"> 
        <div class="detail-price">MXN624.<span>99</span></div>
        <input type="hidden" name="txtPrecio" value="624.99">
        <center>
        <input type ="number" name="cant" value="1" style="width: 50px;">
        <br>   
        <input type="submit" value="Agregar" name="btnAgregar">
        <br> <br>
        </center>
      </div>
    </a>
    </form>
  </div>

                <!--   Tarjeta 5-->


  <div class="product-box">
  <form action="caballero.php" method="POST">
    <div class="product">
      <img src="https://img.ltwebstatic.com/images3_pi/2021/12/23/164023750212565f62b42cf446cc4be6b8d9fc50ce_thumbnail_600x.webp">
      <div class="detail-title">CHALECO</div>
      <input type="hidden" name="txtProducto" value="Chaleco">
      <div class="detail-description">Hombres una pieza Chaleco color negro con botón delantero</div>
      <input type="hidden" name="txtDescripcion" value="Hombres una pieza Chaleco color negro con botón delantero"> 
      <div class="detail-price">MXN422.<span>99</span></div>
      <input type="hidden" name="txtPrecio" value="422.99">
      <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
    </div>
  </a>
  </form>
</div>

              <!--   Tarjeta 6-->


<div class="product-box">
<form action="caballero.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/01/13/1642051181170383934846203e7d050fc322c44674_thumbnail_600x.webp">
    <div class="detail-title">SHORTS HOMBRE</div>
    <input type="hidden" name="txtProducto" value="Shorts hombre">
    <div class="detail-description">Shorts mezclilla bermuda con bolsillo lateral con solapa color negro</div>
    <input type="hidden" name="txtDescripcion" value="Shorts mezclilla bermuda con bolsillo lateral con solapa color negro"> 
    <div class="detail-price">MXN530.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="530.99">
    <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
  </div>
</a>
</form>
</div>

              <!--   Tarjeta 7-->


<div class="product-box">
<form action="caballero.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/11/06/16046428712fa033a02b8f246953d32d172b958508_thumbnail_600x.webp">
    <div class="detail-title">JEANS HOMBRE</div>
    <input type="hidden" name="txtProducto" value="Jeans hombre">
    <div class="detail-description">Hombres Jeans elegantes de corte y pierna recta color azul obscuro</div>
    <input type="hidden" name="txtDescripcion" value="Hombres Jeans elegantes de corte y pierna recta color azul obscuro"> 
    <div class="detail-price">MXN546.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="546.99">
    <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
  </div>
</a>
</form>
</div>

              <!--   Tarjeta 8-->


<div class="product-box">
<form action="caballero.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/06/12/1623482139754d4693480f8b2d50d4e656d56ced73_thumbnail_600x.webp">
    <div class="detail-title">PANTALON C&A</div>
    <input type="hidden" name="txtProducto" value="Pantalon C&A">
    <div class="detail-description">Pantalones cargo marca C&A con cremallera y bolsillo con solapa integrada en el lateral</div>
    <input type="hidden" name="txtDescripcion" value="Pantalones cargo marca C&A con cremallera y bolsillo con solapa integrada en el lateral"> 
    <div class="detail-price">MXN385.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="385.99">
    <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
  </div>
</a>
</form>
</div>

              <!--   Tarjeta 9-->


<div class="product-box">
<form action="caballero.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/01/19/16110426034926e74e09d88faa6c28491732ed6824_thumbnail_600x.webp">
    <div class="detail-title">JEANS VERDES</div>
    <input type="hidden" name="txtProducto" value="Jeans verdes">
    <div class="detail-description">Pantalones color verde con bolsillo y solapa de cintura con cordón integrado</div>
    <input type="hidden" name="txtDescripcion" value="Pantalones color verde con bolsillo y solapa de cintura con cordón integrado"> 
    <div class="detail-price">MXN399.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="399.99">
    <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
  </div>
</a>
</form>
</div>

              <!--   Tarjeta 10-->


<div class="product-box">
<form action="caballero.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/07/28/1627471044f477166943ef92919ce7ff488484f667_thumbnail_600x.webp">
    <div class="detail-title">PLAYEROS</div>
    <input type="hidden" name="txtProducto" value="Playeros">
    <div class="detail-description">Shorts de natación con estampado de dibujos animados de dos tonos azul y rosa</div>
    <input type="hidden" name="txtDescripcion" value="Shorts de natación con estampado de dibujos animados de dos tonos azul y rosa"> 
    <div class="detail-price">MXN 178.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="178.99">
    <center>
    <input type ="number" name="cant" value="1" style="width: 50px;">
    <br>   
    <input type="submit" value="Agregar" name="btnAgregar">
    <br> <br>
    </center>
  </div>
</a>
</form>
</div>

        </center>
       
        
      </div>

    </div>
 
  </div>

 </section>
 <footer class="pie-pagina">
      <div class="grupo-1">
          <div class="box">
              <figure>
                  <a>
                      <img src="../images/style.png" alt="Logo de fashion style">
                  </a>
              </figure>
          </div>
          <div class="box">
              <h2>SOBRE NOSOTROS</h2>
              <p>FASHION STYLE es una empresa yucateca de moda rápida B2C de e-commerce. La empresa está principalmente enfocada a la ropa femenina, pero también ofrece artículos para hombre y pronto ropa de niño, accesorios, zapatos, bolsos y otros artículos de moda.</p>
          </div>
          <div class="box">
              <h2>SIGUENOS</h2>
              <div class="red-social">
                  <a href="https://www.facebook.com/fernandoavila07" class="fa fa-facebook"></a>
                  <a href="https://instagram.com/soyfernandoavila?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a>
                  <a href="https://twitter.com/Fernando_eam?t=rK8ob1E9rt1StP0-fT_XOQ&s=09" class="fa fa-twitter"></a>
                  <a href="https://youtube.com/channel/UCKzZAh1ZyWCkeG7Ea5B25Ag" class="fa fa-youtube"></a>
              </div>
          </div>
      </div>
      <div class="grupo-2">
          <small>&copy; 2022 <b>Fernando Avila</b> - Todos los Derechos Reservados.</small>
      </div>
  </footer>
 <?php 
 if(isset($_REQUEST["btnAgregar"])){
  $producto = $_REQUEST["txtProducto"];
  $descripcion = $_REQUEST["txtDescripcion"];
  $cantidad = $_REQUEST["cant"];
  $precio = $_REQUEST["txtPrecio"];

  $_SESSION["carrito"][$producto]["Descripcion"] = $descripcion;
  $_SESSION["carrito"][$producto]["Cantidad"] = $cantidad;
  $_SESSION["carrito"][$producto]["Precio"] = $precio;

  echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
}
 ?>

</body>
</html>
