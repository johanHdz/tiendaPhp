<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras MR Anime</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img2/icono.ico">
</head>

<body>
    <header class="header">
        <a href="index.html">
            <img class="header__logo" src="img2/LogoAnime.png" alt="Logotipo">
        </a>
    </header>

    <div>
        <?php
        if(isset($_SESSION["usuario"])) {
            echo "<p class=mensaje__usuario>$_SESSION[usuario]</p>";
        }
        ?>
    </div>
    
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="login.php">Login</a>
        <a class="navegacion__enlace" href="cerrarSesion.php">Salir</a>
    </nav>

</body>

</html>