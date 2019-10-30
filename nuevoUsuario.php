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
        <link rel="icon" type="image/png" href="images/planeta.jpg">
        
        <style>
            #div{
                position:absolute;
                bottom: 5px;
                left:370px;
            }
            input{
                color:black;
                size:30;
            }
            #a{
 
                border-radius: 5px;
                width: 600px;   
            } 
            #b{
                
                border-radius: 5px;
                width: 400px;  
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
       <div id="div" align="center">
       <form id="a" action="CrearUsuario.php" method="post" action="datosFormulario.php">
            <br>
            
            <p><u><strong>Nombre: <input type="text"  name="nombre" size="30"required=""></strong></u></p>
            <br>
            <p><u><strong>Alias:  <input type="text"  name="alias" size="30"required=""></strong></u></p>
            <br>
            <p><u><strong>Contraseña:  <input type="text"  name="contraseña" size="30"required=""></strong></u></p>
            <br>
            <p><u><strong>Email:  <input type="text"  name="email" size="30" required=""></strong></u></p>
             <br>
             <p><u><strong>Año de nacimiento:  <input type="año"  name="nacido" min="1900" required=""></strong></u></p>
            <br>
            <p><u><strong>Sexo: 
                        <input type="radio" name="H" value="h"required=""> Hombre
                        <input type="radio" name="M" value="m"required=""> Mujer
                    </strong></u></p>
            <br>
            <p>
              <input type="submit" name="enviar" value="Enviar" size="30" onClick="location.href='Login.php'">
              <input type="reset" name="borrar" value="Borrar" size="30">
               </p>
        </form>
   </div>
        
    </body>
</html>
