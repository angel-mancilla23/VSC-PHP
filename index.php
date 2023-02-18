<!DOCTYPE html>
<html>
    <head>
        <title>INICIAR SESION</title>
        <style>
              body{
        
        width: 600px;
        height:600px;
        background-image:linear-gradient(49deg, white, black);



    }
            </style>
    </head>

    <body>
       
        
        <h2>Inicia sesion: </h2>
        
        <form action="Procesar.php" method="POST">
        <p><label for="nickname">Usuario</label>
        <input type="text" name="nickname"></p>
        
        <p><label for="password">Contraseña</label>
        <input type="text" name="password">

       
        
        <p><input type="submit" value="Acceder"></p>
        <?php
        if(isset($_GET["error"])){
            $error = $_GET['error'];
            if($error == "Contraseña incorrecta"){
                echo "<h2>El usuario o contraseña no son correctos</h2>";

            }
            if($error == "Campos vacios"){
                echo "<h2>Hay uno o mas campos vacios</h2>";

            }
           
        }
        ?>
        </form>
        

    




    </body>
</html>