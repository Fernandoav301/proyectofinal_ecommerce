<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contáctenos</title>
    <link rel="stylesheet" href="../css/contactenos.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
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
        <a href="./contactenos.php" class="nav-menu-link nav-link nav-menu-link_active">Contáctenos</a>
        </li>
        <li class="nav-menu-item">
        <a href="./carrito.php" class="nav-menu-link nav-link ">Mis Compras</a></li>
        </ul>
        </nav>
     </header>
    <div class="container-form">
        <div class="info-form">
            <h2><br><br>Contáctanos</h2>
            <p>Si necesitás contactarnos para hacer alguna consulta o simplemente para dejar tu comentario, por favor sentite libre de hacerlo.Responderemos lo más pronto posible. </p>
            <a><i class="fa fa-phone"></i> 123-456-789</a>
            <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i> fashionstyle03@gmail.com</a>
            <a><i class="fa fa-map-marked"></i> Mérida, Yucatán</a>
        </div>
        <form action="./contactenos.php" autocomplete="off" method="POST"><br><br><br><br><br>
            <input type="text" name="nombre" placeholder="Tu Nombre" class="campo" required>
            <input type="emal" name="email" placeholder="Tu Email" class="campo" required>
            <textarea name="mensaje" placeholder="Tu Mensaje..." required></textarea>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar"><br><br><br><br>
        </form>
    </div>
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
    if(isset($_POST['enviar'])){
        echo "<script>alert('Su mensaje fue enviado correctamente');</script>";

    }
    ?>
</body>
</html>