<?php
session_start();

# 1.- Obtengo los datos enviados por POST
# 2.- Si el usuario es el usuario que esta registrado entonces, creo SESIONES
# 3.- Rediccionarle a la parte privada (Bienvenido!)
if($_POST['usuario'] != "" && $_POST['clave']!= ""){
    // Creo las Sesiones
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
    
    // Si el checkbox "Recordarme" está marcado, creamos las cookies
    if(isset($_POST['recordar']) && $_POST['recordar'] == 'true') {
        // Las cookies durarán 30 días
        setcookie('c_usuario', $_POST['usuario'], time() + (86400 * 30), "/");
        setcookie('c_clave', $_POST['clave'], time() + (86400 * 30), "/");
    } else {
        // Si no está marcado, eliminamos las cookies si existen
        setcookie('c_usuario', '', time() - 3600, "/");
        setcookie('c_clave', '', time() - 3600, "/");
    }
    
    header("Location:mipanel.php");
} else {
    header("Location:index.php");
}
?>