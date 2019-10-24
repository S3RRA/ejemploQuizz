<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú del juego</title>
        <link rel="icon" type="image/png" href="images/planeta.jpg">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            legend{
                color:white;
            }
            #boton{
                float:right;               
            }
            #opcion1{
                height: 33%;
                width:33%;
                position:absolute;
                top:100px;
                left:50px;
                background-color:orange;
                border:solid;
                border-radius: 5px;
            }
            #opcion2{
                height: 33%;
                width: 33%;
                position: absolute;
                top:100px;
                right:50px;
                background-color: green;
                border:solid;
                border-radius: 5px;
            }
            #logo{
                position:absolute;
                left:550px;
                top:150px;
            }
            #boton3, #boton4{
                float:right;
                border-radius: 5px;
            }
            #opcion3{
                height:25%;
                width:45%;
                position: absolute;
                top:400px;
                left:400px;
                background-color: #1b6d85;
                border:solid;
                border-radius: 5px;
            }
           
        </style>
    </head>
    <body>
       
        <h3 align="center">ELIGE UN MODO DE JUEGO</h3>
       
        <div width="33%" id = "opcion1">
            <legend>
                ELECCIÓN POR TEMAS
            </legend>
            <p>
                Esta opción consiste en la elección del tema del que deseas que se realicen las preguntas. Utiliza el dropdown y selecciona que tema quieres:
            </p>
            <br><br<br>
            <div class="dropdown">
                <button id="boton" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  TEMAS
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Historia</a>
                    <a class="dropdown-item" href="#">Economía</a>
                    <a class="dropdown-item" href="#">Lengua y literatura</a>
                    <a class="dropdown-item" href="#">Filosofía</a>
                    <a class="dropdown-item" href="#">Inglés y francés</a>
                </div>
            </div>
        </div> 
        
        <div width="33%" id = "opcion2">
            <legend>
                ALEATORIO
            </legend>
            <p>
                Este modo de juego es <b>solo para expertos</b> mezclando todos los temas.
            </p>
            <br><br<br>
            <button id="boton3">Iniciar</button>
        </div> 
        <img id="logo" src="images/planeta.jpg">
        <div id="opcion3">
            <legend>
                MODO RETO
            </legend>
            <p>
                Envía un reto a tus amigos para ver quien obtiene mayor puntuación.
            </p>
            <button id="boton4">
                Iniciar
            </button>
        </div>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <?php
            
        ?>
    </body>
</html>
