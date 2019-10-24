<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="images/planeta.jpg">
        <style>
            #casilla{
                height:230px;
                width:500px;
                border: solid;
                border-width: 1px;
                border-radius: 5px;
                align-content: center;
                position: absolute;
                left: 400px;
                top:300px;
            }       
            #boton3{
                position:absolute;
                top:485px;
            } 
            body{
                background-image:url(images/espacio.gif);
            }
        </style>
    </head>
    <body> 
        <div class="alert alert-warning" role="alert">
            <b>BIENVENIDO AL QUIZZ!</b> Por favor introduce tus datos para <u>iniciar sesión</u> o <u><a href="#">regístrate</a></u>
        </div>
        <div align="center" border="solid" border-width="1px" border-radius="7px">
            <img src="images/planeta.jpg" id="planeta">       
            <form method="post" action="" id="casilla">
                <legend>DATOS PERSONALES:</legend>
                <br>
                Usuario: <input type="text" name="nombre" width="43" name="user" required outofocus>
                <br>
                <br>
                Contraseña: <input type="password" name="password" width="40" name="pass" required autofocus>
                <br>
                <input type="checkbox"
                <br>
                <input type="reset" id="boton2" class="btn btn-outline-warning">
                <input type="submit" id="boton1" class="btn btn-outline-success" onClick="location.href='Menu.php'">
 
            </form>
            <input type="button" id="boton3" value="Regístrate" class="btn btn-info">
        </div>
        
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>      
        <?php
        /*
            include('./funciones.php');
            $mysqli = conectaBBDD();
            
            $nombre = $_POST['user'];
            $pass = $_POST['pass'];
            
            $consulta_acceso = $mysqli_query($mysqli, "SELECT User FROM usuarios WHERE User = '$nombre' AND Password = '$pass'");
            
            if (!$consulta_acceso){
                echo "Usuario o contraseñas incorrectos: ".mysqli_error($mysqli);
            }else{
                print "Bienvenido";
            }
          */
        ?>
    </body>
</html>
