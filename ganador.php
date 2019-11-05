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
                color: black;
                position:absolute;
                top:200px;
                left:580px;
                background-color: white;
                border:solid;border-radius: 5px;
                border-color: black;
                width:15%;
            }
             body {

            /* Ubicación de la imagen */

            background-image: url(images/conejoganador.gif);
            /* Para que la imagen de fondo no se repita */
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            weight:100%;
            } 
        </style>
    <body>
        <div id="alert" class="alert alert-warning" role="alert">
            ENHORABUENA, HAS GANADO ¿Te atreves con <a href="Menu.php">otro modo de juego?</a>
        </div>
        <font size="3" color="white" face="Comic Sans MS,arial">
      
        <div align="center">
           
      
       <p><strong><h1>ENHORABUENA</h1></strong></p>
       </div>
        <br>
        <br>
         <br>
        <br>
        <div id="div" align="center">
            <br>
            <button onclick="location.href='Juego.php'" class="btn btn-outline-info" target="_blank">Volver a jugar</button>
            <br><br>
            <button onclick="location.href='Menu.php'" class="btn btn-outline-info" target="_blank">Elegir modo de juego</button>
            <br><br>
            <button onclick="location.href='Login.php'" class="btn btn-outline-info" target="_blank">Salir</button>
            <br><br>
        </div>
    </body>
</html>
