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
    <title>Zapatos y accesorios</title>
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
              <div class="title-section">Zapatos y accesorios</div>
              <div class="products-list">

                            <!--   Tarjeta 1-->


                  <div class="product-box">
                    <form action="accesorios.php" method="POST">
                    <div class="product">
                      <img src="https://img.ltwebstatic.com/images3_pi/2022/04/08/1649408714d79ee8d6f289fcf331c64d3a7cb24c91_thumbnail_600x.webp">
                      <div class="detail-title" name="txtProducto">SANDALIAS NIÑO</div>
                      <input type="hidden" name="txtProducto" value="Sandalias niño">
                      <div class="detail-description" name="txtDescripcion">Niños Sandalias deportivas Cierre de gancho y bucle </div>
                      <input type="hidden" name="txtDescripcion" value="Sudaderas para hombre Cordón Bolsillo Letras Calle de color amarillo">
                      <div class="detail-price" name="txtprecio">MXN358.<span>99</span></div>
                      <input type="hidden" name="txtPrecio" value="358.99">
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
        <form action="accesorios.php" method="POST">
          <div class="product">
            <img src="https://img.ltwebstatic.com/images3_pi/2021/06/21/1624275961f3ceec86276ebebfed8277e87b6f0f67.webp">
            <div class="detail-title">SOMBRERO</div>
            <input type="hidden" name="txtProducto" value="Sombrero">
            <div class="detail-description">Sombrero de color cafe material de fedora minimalista</div>
            <input type="hidden" name="txtDescripcion" value="Sombrero de color cafe material de fedora minimalista">
            <div class="detail-price">MXN100.<span>99</span></div>
            <input type="hidden" name="txtPrecio" value="100.99">
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
      <form action="accesorios.php" method="POST">
        <div class="product">
          <img src="https://img.ltwebstatic.com/images3_pi/2022/04/02/1648878726ea23ec56061206629a21c3bac59d83cc_thumbnail_600x.webp">
          <div class="detail-title">GAFAS</div>
          <input type="hidden" name="txtProducto" value="Gafas">
          <div class="detail-description">Gafas de moda color negro con un marco geométrico</div>
          <input type="hidden" name="txtDescripcion" value="Gafas de moda color negro con un marco geométrico">
          <div class="detail-price">MXN143.<span>99</span></div>
          <input type="hidden" name="txtPrecio" value="143.99">
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
    <form action="accesorios.php" method="POST">
      <div class="product">
        <img src="https://img.ltwebstatic.com/images3_pi/2022/03/23/16480170774d7586f7c05e75b444443c15b64bc285_thumbnail_600x.webp">
        <div class="detail-title">BOLSO NEGRO</div>
        <input type="hidden" name="txtProducto" value="Bolso negro">
        <div class="detail-description">Bolsa cuadrada minimalista con diseño metal</div>
        <input type="hidden" name="txtDescripcion" value="Bolsa cuadrada minimalista con diseño metal"> 
        <div class="detail-price">MXN198.<span>99</span></div>
        <input type="hidden" name="txtPrecio" value="198.99">
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
  <form action="accesorios.php" method="POST">
    <div class="product">
      <img src="https://img.ltwebstatic.com/images3_pi/2022/04/05/16491632507250340e714bef840bfd19cff395e23b_thumbnail_600x.webp">
      <div class="detail-title">CHANCLAS DAMA</div>
      <input type="hidden" name="txtProducto" value="Chanclas de dama">
      <div class="detail-description">Chanclas con estampado de leopardo en color cafe y negro</div>
      <input type="hidden" name="txtDescripcion" value="Chanclas con estampado de leopardo en color cafe y negro"> 
      <div class="detail-price">MXN130.<span>99</span></div>
      <input type="hidden" name="txtPrecio" value="130.99">
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
<form action="accesorios.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images2_pi/2019/09/21/15690369683320386787_thumbnail_600x799.webp">
    <div class="detail-title">GORRO</div>
    <input type="hidden" name="txtProducto" value="Gorro">
    <div class="detail-description">Gorro color negro de béisbol con bordado de letra blanca</div>
    <input type="hidden" name="txtDescripcion" value="Gorro color negro de béisbol con bordado de letra blanca"> 
    <div class="detail-price">MXN66.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="66.99">
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
<form action="accesorios.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2020/07/13/1594623506a729ce537f757bcc556baae2fb101f1a_thumbnail_600x.webp">
    <div class="detail-title">COLLAR</div>
    <input type="hidden" name="txtProducto" value="Collar">
    <div class="detail-description">Collar con cuenta con perla artificial color blanco</div>
    <input type="hidden" name="txtDescripcion" value="Collar con cuenta con perla artificial color blanco"> 
    <div class="detail-price">MXN17.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="17.99">
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
<form action="accesorios.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images2_pi/2019/08/21/15663754433189266464_thumbnail_600x799.webp">
    <div class="detail-title">ANILLOS DE PELO</div>
    <input type="hidden" name="txtProducto" value="Anillos de pelo">
    <div class="detail-description">Anillo de pelo color dorado simple cincuenta piezas</div>
    <input type="hidden" name="txtDescripcion" value="Anillo de pelo color dorado simple cincuenta piezas"> 
    <div class="detail-price">MXN13.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="13.99">
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
<form action="accesorios.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2022/04/18/16502793812f18dbd6c792aec6d49964ad624e2500_thumbnail_600x.webp">
    <div class="detail-title">COLLARES</div>
    <input type="hidden" name="txtProducto" value="Collares">
    <div class="detail-description">Hombres siete piezas Collar con accesorio geométrico</div>
    <input type="hidden" name="txtDescripcion" value="Hombres siete piezas Collar con accesorio geométrico"> 
    <div class="detail-price">MXN100.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="100.99">
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
<form action="accesorios.php" method="POST">
  <div class="product">
    <img src="https://img.ltwebstatic.com/images3_pi/2021/11/29/1638164822da661046b20634eeec69511cdc985773_thumbnail_600x.webp">
    <div class="detail-title">BOLSO HOMBRE</div>
    <input type="hidden" name="txtProducto" value="Bolso hombre">
    <div class="detail-description">Hombres Bolso minimalista con hebilla con diseño</div>
    <input type="hidden" name="txtDescripcion" value="Hombres Bolso minimalista con hebilla con diseño"> 
    <div class="detail-price">MXN 212.<span>99</span></div>
    <input type="hidden" name="txtPrecio" value="212.99">
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
