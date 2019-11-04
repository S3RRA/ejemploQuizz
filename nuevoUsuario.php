  
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <style>
            label{
                display: inline-block;
                float: left;
                clear: left;
                width: 50px;
                text-align: right;
            }
            #k{
                color:black;
                size:30;
                width:400px;
                display: inline-block;               
            } 
            #r{color:black;width:100px;display:inline-block}
            #a{
 
                border-radius: 5px;
                width: 600px;   
            } 
            #b{
                position:absolute;
                right: 465px;
                border-radius: 5px;
                width: 400px;  
            }
            #centro{
                position:absolute;
                left:500px;
                top:250px;
            }
            #butuones{
                position:absolute;
                top:450px;
                left:590px;
            }
            body {
            /* Ubicación de la imagen */
            background-image: url(images/espacio2.gif);
            /* Para que la imagen de fondo no se repita */
            background-repeat: no-repeat;
            background-size: cover;
            } 
        </style>
        <title>Crear Usuario</title>
    </head>
    <body>
        <font size="3" color="white" face="Comic Sans MS,arial">
      
        <div align="center">           
            <br>
            <img id="b" src="images/quizzplaneta.jpg">
        </div>
        <br>
        <br>
        <div align="center">
            <form id="a" action="datosFormularioNuevo.php" method="post" >
                <br>
                <div id="centro">       
                    <p><u><strong><label><input id="k" type="text"  name="nombre" size="30"required="" placeholder="Nombre"></label></strong></u></p>
                    <br>
                    <p><u><strong><label><input id="k" type="text"  name="alias" size="30"required="" placeholder="Usuario"></label></strong></u></p>
                    <br>
                    <p><u><strong><label><input id="k" type="password"  name="contraseña" size="30"required="" placeholder="Contraseña"></label></strong></u></p>
                    <br>
                    <p><u><strong><label><input id="k" type="text"  name="email" size="30" required="" placeholder="Correo electrónico"></label></strong></u></p>
                    <br>
                </div>  
                <p id="butuones">            
                    <input id="r" type="submit" name="enviar" value="Enviar" size="30" class="btn btn-success">
                    <input id="r" type="reset" name="borrar" value="Borrar" size="30" class="btn btn-danger">
                </p>
            </form>
        </div>       
    </body>
</html>