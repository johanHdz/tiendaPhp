<?php
$dbhost= "localhost"; //host donde esta la base de datos
$dbname= "tienda"; //nombre de BD
$dbuser= "root"; //user name
$dbpass= ""; //password de usuario


$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];
$verif= false;
$nickUsuario= "";

/* If para verificar los campos*/
if($correo!="" && $contraseña!="") {
    $verif= true;
}
else {
    $_SESSION["msjLogin"]= "Error: Campo(s) vacío(s)";
}

//Conexión
$conexion= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Problemas con la conexión");

if($verif=true) {
    //Para mostrar el nombre dependiendo de los campos
    $resultado= mysqli_query($conexion, "SELECT * FROM usuarios WHERE `correo_usuario`= '$correo' && `contraseña_usuario`='$contraseña'");
    while($consulta= mysqli_fetch_array($resultado)) {
        $nickUsuario= $consulta['nick_usuario'];
        mysqli_close($conexion);
        $verif= false;
        include "index.php";
    }
}
if($nickUsuario=="") {
    $_SESSION["msjLogin"]="Datos incorrectos";
    include "login.php";
} else {
    $_SESSION["usuario"]= "Bienvenido ".$nickUsuario;
}
?>