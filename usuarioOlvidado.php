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
    <body>
        <font size="3" color="white" face="Comic Sans MS,arial">
      
        <div align="center">
           
            <br>
            <img id="b" src="images/quizzplaneta.jpg">
       
       <br>
       <br>
       <p><u><strong>No te preocupes recuperaremos tu contraseña pronto</strong></u></p>
       </div>
       <br>
       <div align="center">
       <form id="a" action="CrearUsuario.php" method="post" action="datosFormulario.php">
            <br>
            
        <p><u><strong>Email: <input type="text"  name="email" size="30"required=""></strong></u></p>
        <br>
        <p><u><strong>Alias:  <input type="text"  name="alias" size="30"required=""></strong></u></p>
        <br>
        <p>
            <input type="button" name="enviar" value="Recuperar" size="30" onclick="alert('Te hemos enviado un correo con tu nuevo pass')">
        </p>
      
    
     
</form>
   </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
