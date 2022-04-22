<?php 
    session_start();
    if(!$_SESSION['user']) {
        header('Location: ../index.php');
    }
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
    <link rel="stylesheet" href="../css/categorias.css">
    <script defer src="js/index.js"></script>
    <title>Fashionstyle</title>
    <style>
      .visitas h3{
        margin-top: 7%;
        text-align: right;
        padding-right: 4%;
        color: #604fff;
  }
    </style>
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
        <a href="./bienvenida.php" class="nav-menu-link nav-link nav-menu-link_active">inicio</a>
        </li>
        <li class="nav-menu-item">
        <a href="./quienessomos.html" class="nav-menu-link nav-link">quiénes somos</a>
        </li>
        <li class="nav-menu-item">
        <a href="./contactenos.php" class="nav-menu-link nav-link">Contáctenos</a>
        </li>
        <li class="nav-menu-item">
        <a href="./carrito.php" class="nav-menu-link nav-link ">Mis Compras</a></li>
        <li class="nav-menu-item">
        <a href="../index.php?logout=true" class="nav-menu-link nav-link">Cerrar sesión</a>
        </li>
      </ul>
        </nav>
     </header>
<!--Categorias-->
  
     <center>
      <div class="visitas">
            <?php 
                echo '<h3>Visitas por el usuario: ' . $_COOKIE[$_SESSION['user']] . '</h3>'; 
            ?>  
      
      </div>
      <div class="title-cards">
            <?php 
                echo '<h1>Bienvenido ' . $_SESSION['user'] . ' elige la categoria de tu preferencia!</h1>';
            ?>  
                      
      
      </div>
      
      
          <div class="card ">
            <figure>
              <img src="http://fresha.kubistudio.com/wp-content/uploads/2017/04/spring-summer.png">
            </figure>
            <div class="contenido-card">
              <h3>Ropa de caballero</h3>
              <a href="./caballero.php">Ver más</a>
            </div>
          </div>
        </div>
      
        
          <div class="card ">
            <figure>
              <img src="http://fresha.kubistudio.com/wp-content/uploads/2017/04/shop1.jpg"style="width: 97.6%; ">
            </figure>
            <div class="contenido-card">
              <h3>Ropa de dama</h3>
              <a href="./dama.php">Ver más</a>
            </div>
          </div>
        </div>

        <div class="card ">
          <figure>
            <img src="https://img.ltwebstatic.com/images3_pi/2021/04/27/161949357913148af9eedc57154a490f8bdf25aeb6_thumbnail_600x.webp"style="width: 93.5%; ">
          </figure>
          <div class="contenido-card">
            <h3>Zapatos y accesorios</h3>
            <a href="./accesorios.php">Ver más</a>
          </div>
        </div>
      </div>

        <br><br><br>
     </center>

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
     
  </body>
</html>
            