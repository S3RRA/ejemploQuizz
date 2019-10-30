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
            #respuesta1,#respuesta2,#respuesta3,#respuesta4{align:center;width:100%;}
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
            }
            #quizz{
                position:absolute;
                left:350px;
                top:220px;
                border:solid;
                border-radius: 5px;
                width:45%;
            }        
            body{
                background-image: url('images/espacio2.gif');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <?php
            include('./funciones.php');
            $mysqli = conectaBBDD();
            
            if(isset($_GET['tema'])){
                $t = $_GET['tema'];
            } else {
                $t = '*';
            }
            
            $consulta = $mysqli -> query("SELECT * FROM preguntas WHERE tema = '$t';");
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
          
        ?>
    </head>
    <body>
        <div class="alert alert-warning" role="alert">
            Buena suerte!
        </div>
        <div id="vidas">
            <img src="images/vida.png" width="30">
            <img src="images/vida.png" width='30'>
            <img src="images/vida.png" width='30'>
        </div>
        <img src='images/quizzplaneta.jpg' width='250' id="logo">
        <div id="quizz">
            <legend align="center">
                <b><?php echo $listaPreguntas[$preguntaElegida][2];?></b>
            </legend>
            <br><br>
            <div align="center">
                <button id="1" onclick="chequea()">
                    <?php echo $listaPreguntas[$preguntaElegida][$r1];?>
                </button>
            </div>
            <br><br>
            <div align="center">
                <input type="button" id="2" onclick="chequea()">
                    <?php echo $listaPreguntas[$preguntaElegida][$r2];?>
                </input>
            </div>
            <br><br>
            <div align="center">
                <input type="button" id="3" onclick="chequea()">
                    <?php echo $listaPreguntas[$preguntaElegida][$r3];?>
                </input>
            </div>
            <br><br>
            <div align="center">
                <input type="button" id="3" onclick="chequea()">
                    <?php echo $listaPreguntas[$preguntaElegida][$r4];?>
                </input>
            </div>
            <br><br>
        </div>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            var correcta = '<?php echo $listaPreguntas[$i][7];?>';
            function chequea(){
                if(1==correcta){
                    $('#respuesta1').addClass('btn btn-success');
                } else if (2==correcta){
                    $('#respuesta2').addClass('btn btn-success');                 
                } else if (3==correcta){
                    $('#respuesta3').addClass('btn btn-success');                 
                } else if (4==correcta){
                    $('#respuesta4').addClass('btn btn-success');
                }
            }
        </script>
    </body>
</html>
