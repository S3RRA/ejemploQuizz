<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú del juego</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="images/planeta.jpg">
        <style>
            legend,h3{
                color:white;
            }
           
            .opcion1{
                height: 33%;
                width:33%;
                position:absolute;
                top:100px;
                left:50px;
                background-color:orange;
                border:solid;
                border-radius: 5px;
                border-color: #fff;
            }
            .opcion2{
                height: 33%;
                width: 33%;
                position: absolute;
                top:100px;
                right:50px;
                background-color: green;
                border:solid;
                border-radius: 5px;
                border-color: #fff;
            }
            #logo{
                position:absolute;
                left:507px;
                top:200px;
            }
            #boton, #boton3, #boton4{
                float:right;
                border-radius: 5px;
            }
            .opcion3{
                height:25%;
                width:45%;
                position: absolute;
                top:400px;
                left:400px;
                background-color: #1b6d85;
                border:solid;
                border-radius: 5px;
                border-color: #fff;
            }
            body{
                background-image: url('images/espacio2.gif');
                background-repeat: no-repeat;
                background-size: cover;
            }
            option{
                class: btn btn-info;
            }
        </style>
    </head>
    <body>
        
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        <h3 align="center"><u>ELIGE UN MODO DE JUEGO</u></h3>
       
        <div width="33%" class = "opcion1" id="opcion1">
            <legend>
                ELECCIÓN POR TEMAS
            </legend>
            <p>
                Esta opción consiste en la elección del tema del que deseas que se realicen las preguntas. Contarás con tres vidas, pero si puedes acertar cinco preguntas seguidas, recibirás otra vida extra.<br> <b>¿A QUE ESTÁS ESPERANDO?</b>
            </p>
            <br><br<br>
            <div class="dropdown">
                <select class="form-control" id="exampleFormControlSelect2" onchange="eligeTema(this.value);">
                    <option>TEMAS</option>
                    <option value="Lengua">LENGUA</option>
                    <option value="Historia">HISTORIA</option>
                    <option value="Ingles">INGLÉS</option>
                    <option value="Filosofia">FILOSOFÍA</option>
                    <option value="Economia">ECONOMÍA</option>
                </select>
            </div>
        </div> 
        <script>          
            function eligeTema(seleccion){
                location.href="Juego.php?tema=" + seleccion + "&puntuacion1=0&vidas=3";
            }
        </script>
        <div width="33%" class = "opcion2">
            <legend>
                ALEATORIO
            </legend>
            <p>
                Este modo de juego es <b>solo para expertos</b> mezclando todos los temas que tenemos. <br> ¿Crees que tienes lo que hay que tener? <br> <b>¡DEMUESTRALO!</b>
            </p>
            <br><br<br>
            <button id="boton3" onclick="location.href='Juego.php?puntuacion1=0&vidas=3'">Iniciar</button>
        </div> 
        <img id="logo" src="images/quizzplaneta.jpg" width="350px">
        <div class="opcion3">
            <legend>
                MODO RETO
            </legend>
            <p>
                Envía un reto a tus amigos para ver quien obtiene mayor puntuación. <br> ¿Crees que podrás vencer a tus amigos? <br> <b>¡QUE COMIENCE LA BATALLA!</b>
            </p>
            <button id="boton4">
                Iniciar
            </button>
        </div>
        
    </body>
</html>
