<?php
include 'funciones.php';
    session_start();
    
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    
    $result = "SELECT COUNT(*) FROM usuarios WHERE alias = '$usuario' AND contraseña = '$password'";
       
    $row = mysqli_fetch_assoc($result);
    
    $hash = $row['contraseña'];
    
    if (password_verify($_POST['contraseña'], $hash)) {	
				
        $_SESSION['loggedin'] = true;
        $_SESSION['alias'] = $row['alias'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
        echo "<a href=Menu.php></a>";	
			
    } else {
        
        echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
        <p><a href='login.html'><strong>Please try again!</strong></a></p></div>";			
    }