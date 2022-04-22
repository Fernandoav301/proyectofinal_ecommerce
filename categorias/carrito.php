<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/471a905cb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/menu.css">
    <script defer src="js/index.js"></script>
    <title>Mis compras</title>
    <style>
      hr {
   border-color: #604fff;
 }
 h4{
   color: #604fff;
 }
 h3{
   color: #034574;
   font-family: Arial verdana;
   font-size: 25px;

 }

 .botones a{
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #604fff;
    border: 1px solid #604fff;
    border-radius: 4px;
    transition: all 400ms ease;
    margin-bottom: 5px;
}
  .botones a:hover{
    background: #604fff;
    color: #fff;
}

.botones2 a{
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #604fff;
    border: 1px solid #604fff;
    border-radius: 4px;
    transition: all 400ms ease;
    margin-bottom: 5px;
}
  .botones2 a:hover{
    background: #604fff;
    color: #fff;
}

.regresar a{
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #604fff;
    border: 1px solid #604fff;
    border-radius: 4px;
    transition: all 400ms ease;
    margin-bottom: 5px;
}
  .regresar a:hover{
    background: #604fff;
    color: #fff;
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
     
     <section>
     <?php
session_start();

$total=0;

echo "<h3><br><br><br><br>MIS COMPRAS</h3>";
if(isset($_SESSION["carrito"])){
 foreach($_SESSION["carrito"] as $indice =>$arreglo){
     echo "<hr><br>Producto: <strong>". $indice . "</strong><br>";
     $total += $arreglo["Cantidad"] * $arreglo["Precio"];
     foreach($arreglo as $key =>$value){
        echo $key .": " . $value . "<br>";
     }
     echo "<div class='botones'><br><a href='carrito.php?item=$indice'>Eliminar Producto</a><br><br> </div>";
 }   

 echo "<hr><center><br><h4>EL TOTAL DE LA COMPRA ACTUAL ES: $$total </h4></center>";
 echo "<div class='botones2'>
        <center><br><br><a href='./bienvenida.php'>Regresar</a> |
        <a href='carrito.php?vaciar=true'>Vaciar Carrito y cerrar sesión</a> |
        <a href='carrito.php?comprar=true'>Realizar Compra</a><br><br></center>
      </div>";

       

       

}else{
    echo "<script>alert('El carrito esta vacio');</script>";
    ?>
    <div class="regresar"> 
    <a href="./bienvenida.php">Regresar</a>
    </div>
    <?php
}
if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("Location:carrito.php");
}
if (isset($_REQUEST["item"])) {
    $producto=$_REQUEST["item"];
    unset($_SESSION["carrito"][$producto]);

    echo"<script>alert('Se elimino el producto: $producto')</script>";
    header("location:carrito.php");

    
}
if(isset($_REQUEST["comprar"])){
  echo "<script>alert('SU COMPRA SE REALIZO CON EXITO');</script>";

}
?>

     </section>

 
  </body>

</html>