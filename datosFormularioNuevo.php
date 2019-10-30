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
    </head>
    <body>
    <?php
            include('./funciones.php');
            $mysqli = conectaBBDD();
            
$nombre = $_POST['nombre'];
$alias = $_POST['alias'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

 $consulta = $mysqli -> query("INSERT INTO usuarios(alias,contraseña,email,nombre) VALUES ('$alias','$contraseña','$email','$nombre')");
?>
</body>

</html>
