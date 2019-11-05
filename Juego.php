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
            #1,#2,#3,#4{align:center;}
            #vidas,#quizz,#puntos{
                background-color:#fff;
                border:solid;
                border-radius: 5px;
                border-color:#fff;
            }
            #puntos{
                position:absolute;
                top:60px;
                right:175px;
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
        <div id="alert" class="alert alert-warning" role="alert">
            Buena suerte!
        </div>
        <div id="vidas">
            <img id="vida1" src="images/vida.png" width="30">
            <img id="vida2" src="images/vida.png" width='30'>
            <img id="vida3" src="images/vida.png" width='30'>
        </div>
        <div id="puntos"><b>PUNTUACIÓN: <?php echo $_GET['puntuacion1'] ?></b></div>
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
        <script>
            <?php
                if(isset($_GET['vidas'])){
                    $vidas = $_GET['vidas'];
                }
                
                if(isset($_GET['puntuacion1'])){
                    $puntuacion1 = $_GET['puntuacion1'];
                }             
            ?>
            var puntuacion = '<?php echo $puntuacion1 ?>';
            var vidas = '<?php echo $vidas?>';
            function chequea(opcion){
                var correcta = '<?php echo $resultado;?>';
                if(opcion == correcta){
                    puntuacion = +100;
                    <?php $puntuacion1 += 100?>
                    document.getElementById("puntos").innerHTML = "<b>PUNTUACION: +100</b>";
                    $('#'+opcion).removeClass('btn btn-info').addClass('btn btn-success');
                    document.title = "RESPUESTA CORRECTA!";
                    document.getElementById("alert").innerHTML = "¡RESPUESTA CORRECTA!";
                    $('#alert').removeClass('alert alert-warning').addClass('alert alert-success');
                    if(puntuacion == 600){
                        window.location.href="ganador.php";
                    }
                    setTimeout(
                        function(){
                            window.location.href="Juego.php?tema=<?php echo $t?>&puntuacion1=<?php echo $puntuacion1?>&vidas=<?php echo $vidas?>";
                        },1000
                    );                 
                } else {
                    vidas = vidas-1;
                    <?php $vidas = $vidas-1; ?>
                    $('#'+opcion).removeClass('btn btn-info').addClass('btn btn-danger');  
                    document.title = "RESPUESTA ERRÓNEA!";
                    document.getElementById("alert").innerHTML = "¡RESPUESTA ERRÓNEA!";
                    $('#alert').removeClass('alert alert-warning').addClass('alert alert-danger');
                    restaVidas();
                }
            }  
            
            function restaVidas(){   
                if(vidas == 0){
                    $('#vida3').css({'display':'none'});
                    window.location.href="perdedor.php";
                }
                else if(vidas == 1){
                    $('#vida2').css({'display':'none'});
                }
                else if(vidas == 2){
                    $('#vida1').css({'display':'none'});                 
                }           
            }      
        </script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>        
    </body>
</html>
