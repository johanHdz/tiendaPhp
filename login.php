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

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="login.php">Login</a>
        <a class="navegacion__enlace" href="cerrarSesion.php">Salir</a>
    </nav>

    <main class="contenedor">
        <h1 class="contenedor__texto">Registrarse</h1>
        <form class="formulario" id="form1" name="form1" method="POST" action="registro.php">
            <input class="formulario__campo" name="nombre" type="text" placeholder="Nombre">
            <input class="formulario__campo" name="correo" type="text" placeholder="Correo">
            <input class="formulario__campo" name="nombreUsuario" type="text" placeholder="Nombre de Usuario">
            <input class="formulario__campo" name="contraseña" type="password" placeholder="Contraseña">
            <input class="formulario__submit" name="crearCuenta" type="submit" value="Crear cuenta">
        </form>
        <?php
        if(isset($_SESSION["msjRegistro"])) {
            echo "<p class=mensaje__registro>$_SESSION[msjRegistro]</p>";
        }
        ?>

        <h1 class="contenedor__texto">Iniciar Sesión</h1>
        <form class="formulario" id="form2" name="form2" method="POST" action="loginPhp.php">
            <input class="formulario__campo" name="correo" type="text" placeholder="Correo">
            <input class="formulario__campo" name="contraseña" type="text" placeholder="Contraseña">
            <input class="formulario__submit" name="iniciarSesion" type="submit" value="Iniciar Sesion">
        </form>
        <?php
        if(isset($_SESSION["msjLogin"])) {
            echo "<p class=mensaje__registro>$_SESSION[msjLogin]</p>";
        }
        ?>

        </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto"> Figuras MR Anime - Todos los derechos Reservados 2022</p>
    </footer>
</body>

</html>