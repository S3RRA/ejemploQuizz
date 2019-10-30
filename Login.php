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
                border-width: 1px;
                border-radius: 5px;
                align-content: center;
                position: absolute;
                left: 435px;
                top:330px;
                color:white;
            }       
            legend{color:white;}
            #boton1,#boton2,#boton3{color:black;}
            #boton3{
                position:absolute;
                top:485px;
            } 
            body{
                background-image: url(images/espacio2.gif);
                /* Para que la imagen de fondo no se repita */
                background-repeat: no-repeat;
                background-size: cover;
            }
            
        </style>
    </head>
    <body> 
        <div class="alert alert-warning" role="alert">
            <b>BIENVENIDO AL QUIZZ!</b> Por favor introduce tus datos para <u>iniciar sesión</u> o <u><a href="nuevoUsuario.php">regístrate</a></u>
        </div>
        <div align="center" border="solid" border-width="1px" border-radius="7px">
            <img src="images/quizzplaneta.jpg" id="planeta">       
            <form method="post" action="" id="casilla">
                <legend>DATOS PERSONALES:</legend>
                <br>
                Usuario: <input type="text" width="43" name="user" required outofocus>
                <br>
                <br>
                Contraseña: <input type="password" width="40" name="pass" required autofocus>
                <br>
                <br>
                <input type="checkbox" name="Recordar"> Recordar usuario y contraseña
                <br>
                <br>
                <input type="reset" id="boton2" class="btn btn-outline-warning">
                <input type="submit" id="boton1" class="btn btn-outline-success" onchange="">
 
            </form>
            <input type="button" id="boton3" value="Regístrate" class="btn btn-info" onClick="location.href='nuevoUsuario.php'">
        </div>
         <?php       
          /*  include('./funciones.php');
            $mysqli = conectaBBDD();
            
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $consulta = $mysqli -> query("SELECT * FROM usuarios WHERE alias = '$user' AND pass = '$pass';"); */       
        ?>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script>
            function comprueba{
                var consulta = '<?php echo $consulta;?>';
                if(consulta==true){
                   location.href='Menu.php';
                } else {
                    brake;
                }
            }
        </script>
    </body>
</html>
