<?php
session_start();
// Restricción de acceso
if($_SESSION["usuario"]=="" || $_SESSION["usuario"]== null){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>PANEL PRINCIPAL</h1></header>
    <main>
        <h2>Bienvenido Usuario: <?php echo $_SESSION["usuario"] ?></h2>

        <a href="">ES (Español)</a>|<a href="">EN (English)</a> <br>
        <a href="cerrarSesion.php">Cerrar Sesion</a> <br>
        <h2></h2>
        <ul>
        </ul>
    </main>
    <footer></footer>
    
</body>
</html>