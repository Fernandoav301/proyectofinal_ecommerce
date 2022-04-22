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
    <title>Ropa de dama</title>
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
              <div class="title-section">Ropa de dama</div>
              <div class="products-list">

              <!--   Tarjeta 1-->


                  <div class="product-box">
                    <form action="dama.php" method="POST">
                    <div class="product">
                      <img src="https://img.ltwebstatic.com/images3_pi/2021/07/05/1625489483a39169bb70f0825a2e49b6f8d2735311_thumbnail_600x.webp">
                      <div class="detail-title" name="txtProducto">TOP ENCAJE</div>
                      <input type="hidden" name="txtProducto" value="Top encaje">
                      <div class="detail-description" name="txtDescripcion">Top transparente elegante con encaje sin sujetador color negro</div>
                      <input type="hidden" name="txtDescripcion" value="Top transparente elegante con encaje sin sujetador color negro">
                      <div class="detail-price" name="txtprecio">MXN172.<span>99</span></div>
                      <input type="hidden" name="txtPrecio" value="172.99">
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
        <form action="dama.php" method="POST">
          <div class="product">
            <img src="https://img.ltwebstatic.com/images3_pi/2021/11/23/1637634535e0a7b13f372d82039398d0ac7c98766a_thumbnail_600x.webp">
            <div class="detail-title">TOP DE PERLA</div>
            <input type="hidden" name="txtProducto" value="Top de perla">
            <div class="detail-description">Top con cuenta de perla de yugo de malla de cuello alto</div>
            <input type="hidden" name="txtDescripcion" value="Hombres Camiseta con estampado de letra japonesa y figura">
            <div class="detail-price">MXN250.<span>99</span></div>
            <input type="hidden" name="txtPrecio" value="250.99">
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
      <form action="dama.php" method="POST">
        <div class="product">
          <img src="https://img.ltwebstatic.com/images3_pi/2021/12/16/1639622592cf73effc5c4a9932bf3f4596a98a978a_thumbnail_600x.webp">
          <div class="detail-title">BLUSA GIGOT</div>
          <input type="hidden" name="txtProducto" value="Blusa gigot">
          <div class="detail-description">Blusa de manga gigot cruzado con cordón trasero</div>
          <input type="hidden" name="txtDescripcion" value="Blusa de manga gigot cruzado con cordón trasero">
          <div class="detail-price">MXN216.<span>99</span></div>
          <input type="hidden" name="txtPrecio" value="216.99">
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
    <form action="dama.php" method="POST">
      <div class="product">
        <img src="https://img.ltwebstatic.com/images3_pi/2021/12/01/16383474510468fc046f34cdb04917552fe00c0c61_thumbnail_600x.webp">
        <div class="detail-title">BLUSA DE ENCAJE</div>
        <input type="hidden" name="txtProducto" value="Blusa de encaje">
        <div class="detail-description">Blusa con encaje en contraste de manga con volante</div>
        <input type="hidden" name="txtDescripcion" value="Blusa con encaje en contraste de manga con volante"> 
        <div class="detail-price">MXN252.<span>99</span></div>
        <input type="hidden" name="txtPrecio" value="252.99">
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
  <form action="dama.php" method="POST">
    <div class="product">
      <img src="https://img.ltwebstatic.com/images3_pi/2021/11/10/1636513027c2ef38c8e36e39f8fa090e7c1cfd46a0_thumbnail_600x.webp">
      <div class="detail-title">JEANS MUJER</div>
      <input type="hidden" name="txtProducto" value="Jeans mujer">
      <div class="detail-description">Mujer jeans ajustados rotos de corte recto color azul</div>
      <input type="hidden" name="txtDescripcion" value="Mujer jeans ajustados rotos de corte recto color azul"> 
      <div class="detail-price">MXN497.<span>99</span></div>
      <input type="hidden" name="txtPrecio" value="497.99">
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
<form action="dama.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/04/03/1585919625a74f766fcffc7ff0f924d28c05fda914_thumbnail_600x.webp">
    <div class="detail-title">SKY JEANS</div>
    <input type="hidden" name="txtProducto" value="Sky jeans">
    <div class="detail-description">SXY Jeans ajustados curvos con estiramiento alto</div>
    <input type="hidden" name="txtDescripcion" value="SXY Jeans ajustados curvos con estiramiento alto"> 
    <div class="detail-price">MXN514.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="514.99">
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
<form action="dama.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/09/09/1599613106510b31afd2b5f2484779a83a7fae6f95_thumbnail_600x.webp">
    <div class="detail-title">PANTALON DAMA</div>
    <input type="hidden" name="txtProducto" value="Pantalon dama">
    <div class="detail-description">Pantalones de cuadros con botones de pata de gallo</div>
    <input type="hidden" name="txtDescripcion" value="Pantalones de cuadros con botones de pata de gallo"> 
    <div class="detail-price">MXN244.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="244.99">
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
<form action="dama.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/02/18/1613640254efb74c897e09e1363758ced37282e5c3_thumbnail_600x.webp">
    <div class="detail-title">SHORT DAMA</div>
    <input type="hidden" name="txtProducto" value="Short dama">
    <div class="detail-description">Shorts color negro con bolsillo oblicuo de cintura con cordón</div>
    <input type="hidden" name="txtDescripcion" value="Shorts color negro con bolsillo oblicuo de cintura con cordón"> 
    <div class="detail-price">MXN209.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="209.99">
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
<form action="dama.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/09/07/1631004562f5ab96adc451e530bbb0d0fb56dec5f6_thumbnail_600x.webp">
    <div class="detail-title">FALDA SHORT</div>
    <input type="hidden" name="txtProducto" value="Falda short">
    <div class="detail-description">Shorts bajo fruncido a capas de cintura ancha color cafe</div>
    <input type="hidden" name="txtDescripcion" value="Shorts bajo fruncido a capas de cintura ancha color cafe"> 
    <div class="detail-price">MXN269.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="269.99">
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
<form action="dama.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/01/05/1641379878368ecb09a02466ef044bbaec26975049_thumbnail_600x.webp">
    <div class="detail-title">BIKINI</div>
    <input type="hidden" name="txtProducto" value="Bikini">
    <div class="detail-description">Push up de talle alto Bañador bikini & Kimono 3 en uno</div>
    <input type="hidden" name="txtDescripcion" value="Push up de talle alto Bañador bikini & Kimono 3 en uno"> 
    <div class="detail-price">MXN434.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="434.99">
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