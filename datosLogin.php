<?php
require 'funciones.php';
    session_start();
    
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "SELECT COUNT(*) FROM usuarios WHERE alias = '$usuario' AND contraseña = '$password'";
       
    $consulta = mysqli_query($conexion_mysql, $sql);
    $array = mysqli_fetch_array($consulta);
    
    if($array['contar']=0){
        $_SESSION['username'] = $usuario;
        header("location: ../Menu.php");
    } else {
        echo "USUARIO O CONTRASEÑA INCORRECTOS";
    }