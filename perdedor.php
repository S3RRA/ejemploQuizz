<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="images/planeta.jpg">       
        <style>

            #div{
                color:black;
                position:absolute;
                top:200px;
                left:550px;
                background-color: white;
                border:solid;border-radius: 5px;
                border-color: black;
                width:15%;
            }
             body {

                /* Ubicación de la imagen */

                background-image: url(images/perdedor.gif);
                /* Para que la imagen de fondo no se repita */
                background-repeat: no-repeat;
                background-size: cover;
         
            } 
        </style>
    <body>
        <div id="alert" class="alert alert-warning" role="alert">
            LO SIENTO, HAS PERDIDO ¿Quieres <a href="Menu.php">volver a intentarlo?</a> <b>¡NO TE RINDAS!</b>
        </div>
        <font size="3" color="white" face="Comic Sans MS,arial">
        
        <div align="center">
           
      
       <p><strong><h1>Vaya...Vaya...Vaya</h1></strong></p>
       </div>
        <br>
        <br>
         <br>
        <br>
        <div id="div" align="center">
            <br><br>
            <button class="btn btn-outline-info" onclick="location.href='Juego.php'">Reiniciar</button><br><br>
            <button class="btn btn-outline-info" onclick="location.href='Menu.php'">Volver al menú</button><br><br>
            <button class="btn btn-outline-info" onclick="location.href='Login.php'">Salir</button><br><br>
        </div>
        <div>
            <source type="audio/mp3" src="sonidos/Perdedor.mp3" autoplay loop preload="none">
        </div>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
