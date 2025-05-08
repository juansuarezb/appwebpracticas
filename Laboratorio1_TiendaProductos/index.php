<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--E-->
    <style>
        h1{
            text-align: center;
            color: #000;
        }

        body{
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        fieldset{
            width: 40%;
            
        }
        
    </style>
</head>
<body>
    <header>
        <h1>Laboratorio 1: Tienda de Productos</h1>
    </header>
    <!--El elemento main se utiliza para representar el contenido principal del cuerpo de 
    un documento HTML-->
    <main>
    <form action="miPanel.php" method="POST">
        <fieldset>
            <legend><strong>Login</strong></legend>        
            <br><label for="usuario"><strong><em>Usuario:</em></strong></label><br>
            <!--El atributo id se utiliza para identificar elementos HTML específicos. 
            Cada atributo id debe tener un valor único--> 
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required> 
            <br><br>
            <label for="password"><strong><em>Contraseña:</em></strong></label> <br>
            <input type="password" id="password" name="password" placeholder="********" required>
            <br><br>
            <input type="checkbox" id="recordar" name="recordar" value="true" checked><label for="recordar">Recordar</label>
            <br><br>
            <input type="submit" value="Iniciar Sesión">
            <br><br>                       
        </fieldset>
    </form>    
    </main>
</body>
</html>