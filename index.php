<?php 
    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
    }

    if(isset($_SESSION['user'])) {
        header('Location:./categorias/bienvenida.php');
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/login.js"></script>

</head>

<body>

    <main>
        <form action="index.php" method="POST">
    <div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" name="user" placeholder="Username" required/><br>
    <h3>Password:</h3>
    <input type="password" name="pass" placeholder="Password" required/>
    <br>
    <input type="submit" value="Login" class="login-button"/>
    <br>
  </div>
</div>
</form>
    </main>

    <?php
    if(isset($_POST['user']) && !empty($_POST['user'])){
        $user = $_POST['user'];
        $_SESSION['user'] = $user;

        if(isset($_COOKIE[$user])) {
            setcookie($user, $_COOKIE[$user]+1, time()+3600);
        } else {
            setcookie($user, 1, time()+3600);
        }
        header('Location:./categorias/bienvenida.php');
    
    }

    ?>

</body>
</html>