<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" type="image/png" href="images/planeta.jpg">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            #1,#2,#3,#4{align:center;width:100%;}
            #vidas,#quizz{
                background-color:#fff;
                border:solid;
                border-radius: 5px;
                border-color:#fff;
            }
            #vidas{
                position:absolute;
                top:60px;
                left:175px;
            }
            #logo{
                position:absolute;
                left:520px;
                top:60px;
            }
            #quizz{
                position:absolute;
                left:350px;
                top:200px;
                border:solid;
                border-radius: 5px;
                width:45%;
            }        
            body{
                background-image: url('images/espacio2.gif');
                background-repeat: no-repeat;
                background-size: cover;
            }
            #cuentaAtras{
                display:flex;
                position:absolute;
                color:white;
                top:60px;
                right:175px;
            }
            #prueba{color:white;}
        </style>
        
    </head>
    <body>
        <?php
            include('./funciones.php');
            $mysqli = conectaBBDD();
            
            if(isset($_GET['tema'])){
                $t = $_GET['tema'];
                $consulta = $mysqli -> query("SELECT * FROM preguntas WHERE tema = '$t';");
            } else {
                $consulta = $mysqli -> query("SELECT * FROM preguntas;");
            }
            
            
            $num_filas = $consulta -> num_rows;
            $listaPreguntas = array();
            
            for ($i = 0; $i<$num_filas; $i++){
                $resultado = $consulta ->fetch_array();
                $listaPreguntas[$i][0]= $resultado['numero'];
                $listaPreguntas[$i][1]= $resultado['tema'];
                $listaPreguntas[$i][2]= $resultado['enunciado'];
                $listaPreguntas[$i][3]= $resultado['r1'];
                $listaPreguntas[$i][4]= $resultado['r2'];
                $listaPreguntas[$i][5]= $resultado['r3'];
                $listaPreguntas[$i][6]= $resultado['r4'];
                $listaPreguntas[$i][7]= $resultado['correcta'];
            }
            
            
            $preguntaElegida = rand(0,$num_filas-1);
            $r1 = rand(3,6);
            $r2 = rand(3,6); while ($r2 == $r1){$r2 = rand(3,6);}
            $r3 = rand(3,6); while ($r3 == $r1 || $r3 == $r2){$r3 = rand(3,6);}
            $r4 = rand(3,6); while ($r4 == $r1 || $r4 == $r2 || $r4 == $r3){$r4 = rand(3,6);}
            $resultado = $listaPreguntas[$preguntaElegida][7];
         
            
        
        ?>
        <script>
            
            function chequea(opcion){
                var correcta = <?php echo $resultado;?>
                if(opcion == correcta){
                    $('#'+opcion).removeClass('btn btn-info').addClass('btn btn-success');
                    //puntos += 1;
                    location.reload();
                } else {
                    $('#'+opcion).removeClass('btn btn-info').addClass('btn btn-danger');       
                }
            }
            //var puntos = 0;
            /*function vidas(){
                
            }*/
            /*
              $('#vida3').css({
                            'display':'none'
                        });
            
             */
            
            /*
            function ponerTiempo{
                document.cookie = 'tiempo: '+totalTime+'; expires = Fri,19 Jun 2020 21:10:59 UTC; path=/';
            }
            //CUENTA ATRÁS
            var totalTime = parseInt (window.getCookie('tiempo'));
            if (isNaN(totalTime)){
                totalTime=60;
            }
            function tiempo{
                document.getElementById('countdown').innerHTML = totalTime;
                if(totalTime = 0){
                    location.href="Juego.php";
                    deleteCookie('tiempo');
                    deleteCookie('vida');
                }else{
                    totalTime-=1;
                    setTimeout('updateClock()',1000);
                    setCookie('tiempo');
                }
            }
            */
             
            
        </script>
        <div class="alert alert-warning" role="alert">
            Buena suerte!
        </div>
        <div id="prueba">
            <?php echo $resultado?>
        </div>
        <!--<button id="countdown" class="btn btn-info"></button>-->
        <div id="vidas">
            <img id="vida1" src="images/vida.png" width="30">
            <img id="vida2" src="images/vida.png" width='30'>
            <img id="vida3" src="images/vida.png" width='30'>
        </div>
       <!-- <div id="puntos">PUNTUACIÓN: </div>-->
        <span id="countdown"></span>
        <img src='images/quizzplaneta.jpg' width='250' id="logo">
        <div id="quizz">
            <legend align="center">
                <b><?php echo $listaPreguntas[$preguntaElegida][2];?></b>
            </legend>
            <br><br>
            <div align="center"> 
                <button class="btn btn-info" id="1" onclick="chequea(this.id);">
                    <?php echo $listaPreguntas[$preguntaElegida][3];?>
                </button>
            </div>
            <br><br>
            <div align="center">
                <button class="btn btn-info" id="2" onclick="chequea(this.id);">
                    <?php echo $listaPreguntas[$preguntaElegida][4];?>
                </button>
            </div>
            <br><br>
            <div align="center">
                <button class="btn btn-info" id="3" onclick="chequea(this.id);">
                    <?php echo $listaPreguntas[$preguntaElegida][5];?>
                </button>
            </div>
            <br><br>
            <div align="center">
                <button class="btn btn-info" id="4" onclick="chequea(this.id);">
                    <?php echo $listaPreguntas[$preguntaElegida][6];?>
                </button>
            </div>
            <br><br>
        </div>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>
